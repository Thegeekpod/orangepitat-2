<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use HasFactory,Sluggable,SoftDeletes;

    protected $fillable = [
        'location_id',
        'name',
        'price',
        'duration',
        'address',
        'description',
        'included',
        'excluded',
        'slug'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
