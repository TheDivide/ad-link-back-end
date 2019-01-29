<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Support\Str;
class Genre extends Model
{
     /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    protected $fillable = [ 'name' ];

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
}
