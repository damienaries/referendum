<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Idea extends Model
{
    use HasFactory, Sluggable;

    const PAGINATION_COUNT = 10;

    protected $guarded = [];

    /**
     * Return the sluggable configuration array for this model
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function getStatusClasses()
    {
        $allStatuses = [
            'Open' => 'bg-gray-200',
            'Considering' => 'bg-purple-600 text-white',
            'In Progress' => 'bg-yellow-600 text-white',
            'Implemented' => 'bg-green-600 text-white',
            'Closed' => 'bg-red-600 text-white'
        ];

        return $allStatuses[$this->status->name];
    }
}
