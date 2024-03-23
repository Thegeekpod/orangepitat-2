<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TourPlan extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'package_id',
        'day',
        'plan_name',
        'plan_details',
    ];

    public function package(){
        return  $this->belongsTo(Package::class,'package_id','id');
    }
}
