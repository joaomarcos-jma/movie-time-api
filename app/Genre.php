<?php

namespace App;

use App\Models\AbstractModel;

class Genre extends AbstractModel
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
    ];
}