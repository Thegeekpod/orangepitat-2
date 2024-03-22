<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use HasFactory, Sluggable, SoftDeletes;

    protected $fillable = [
        'location_id',
        'name',
        'price',
        'duration',
        'address',
        'description',
        'included',
        'excluded',
        'slug',
        'image'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function tourPlans(){
        return $this->hasMany(TourPlan::class);
    }
}
