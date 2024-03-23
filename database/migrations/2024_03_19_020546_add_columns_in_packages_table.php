<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->unsignedBigInteger('location_id')->after('id');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->string('name')->after('location_id');
            $table->decimal('price', 8, 2)->after('name');
            $table->string('duration')->after('price');
            $table->string('address')->after('duration');
            $table->text('description')->after('address');
            $table->text('included')->after('description');
            $table->text('excluded')->after('included');
            $table->text('slug')->after('excluded');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->dropSoftDeletes();
            // Drop the foreign key and the column
            $table->dropForeign(['location_id']);
            $table->dropColumn('location_id');

            // Drop the other added columns
            $table->dropColumn(['name', 'price', 'duration', 'address', 'description', 'included', 'excluded', 'slug']);
        });
    }
};
