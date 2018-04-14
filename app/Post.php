<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{

    use Sluggable;

    protected $fillable=[
        'title',
        'desc',
        'user_id',
        
    ];

    public function user()
    {
        //User::class == 'App\User'
        return $this->belongsTo(User::class);
    }


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}





