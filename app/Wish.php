<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

/**
 * Class Wishes
 * @package App
 */
class Wish extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'wish';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'naam',
        'beschrijving',
        'plaatje',
        'link',
        'prijs',
        'user_id',
    ];

    /**
     * @var array
     */
    protected $dates = [
        'deleted_at'
    ];

    /**
     * default value for user_id
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            $query->user_id = auth::id();
        });
    }
}
