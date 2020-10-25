<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Music extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'title' => 'string',
        'title_ruby' => 'string',
        'lyrics' => 'string',
        'lyrics_url' => 'string',
        'genre' => 'string',
        'original_video_youtube_id' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    protected $guarded = [];

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

    function videos(): HasMany
    {
        return $this->hasMany('\App\Models\Video');
    }

    public function composers(): BelongsToMany
    {
        return $this->belongsToMany('\App\Models\Artist', 'music_composers', 'music_id', 'artist_id');
    }

    public function lyricists(): BelongsToMany
    {
        return $this->belongsToMany('\App\Models\Artist', 'music_lyricists', 'music_id', 'artist_id');
    }

    public function arrangers(): BelongsToMany
    {
        return $this->belongsToMany('\App\Models\Artist', 'music_arrangers', 'music_id', 'artist_id');
    }
}
