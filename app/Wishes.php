<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Wishes
 * @package App
 */
class Wishes extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'wishes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'naam',
        'beschrijving',
        'plaatje',
        'prijs'
    ];

    /**
     * @var array
     */
    protected $dates = [
        'deleted_at'
    ];
}
