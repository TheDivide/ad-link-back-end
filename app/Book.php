<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Support\Str;


class Book extends Model
{
     /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    protected $fillable = [  'title', 'image_url', 'genre_id', 'author_id' ];

    /**
     * Boot the Model.
     */
    public static function boot()
    {
        parent::boot();

        static::creating(function ($instance) {
            $instance->id = (string)Str::uuid();
        });
    }

    function author() {
        return $this->belongsTo('App\Author');
    }

}
