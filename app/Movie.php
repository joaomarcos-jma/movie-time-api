<?php

namespace App;

use App\Models\AbstractModel;

class Movie extends AbstractModel
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'title',
        'adult',
        'overview',
        'runtime',
        'logo_path',
        'genre_id'
    ];

    const NETFLIX = 'Netflix';
    const LOOKE = 'Looke';
    const PRIME_VIDEO = 'Prime Video';
    const TELECINE = 'Telecine Play';
    const HBO = 'HBO Go';
    const GOOGLE_PLAY = 'Google Play.';
    const ITUNES = 'iTunes Store';
    const STREAMING = [
        self::NETFLIX, 
        self::LOOKE, 
        self::PRIME_VIDEO,
        self::TELECINE,
        self::HBO,
        self::GOOGLE_PLAY,
        self::ITUNES
    ];
}
