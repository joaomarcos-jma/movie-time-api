<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractModel extends Model
{

    protected $dates = ['deleted_at'];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The nested's (relations)
     *
     * @var array
     */
    public $nested = [];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
        'pivot'
    ];
}