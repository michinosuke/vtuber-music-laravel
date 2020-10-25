<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistRecommend extends Model
{
    use HasFactory;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    public function artist()
    {
        return $this->belongsTo('\App\Models\Artist');
    }

    public function recommendedArtist()
    {
        return $this->belongsTo('\App\Models\Artist', 'recommended_artist_id');
    }
}
