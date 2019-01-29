<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Support\Str;

class Author extends Model
{
     /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Boot the Model.
     */

    protected $fillable = [ 'name' , 'good_reads_profile'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($instance) {
            $instance->id = (string)Str::uuid();
        });
    }
}
