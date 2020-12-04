<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Artist extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'name' => 'string',
        'name_ruby' => 'string',
        'profile' => 'string',
        'sex' => 'string',
        'birthday' => 'date',
        'id_youtube' => 'string',
        'youtube_registration_date' => 'date',
        'id_twitter' => 'string',
        'id_instagram' => 'string',
        'url_niconico' => 'string',
        'url_homepage' => 'string',
        'id_spotify' => 'string',
        'id_apple_music' => 'string',
        'id_showroom' => 'integer',
        'id_openrec' => 'string',
        'id_bilibili' => 'integer',
        'id_tiktok' => 'string',
        'id_twitcasting' => 'string',
        'id_facebook' => 'string',
        'id_pixiv' => 'integer',
        'youtube_channel_is_user' => 'boolean',
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

    public function recommends(): BelongsToMany
    {
        return $this->belongsToMany('\App\Models\Artist', 'artist_recommends', 'artist_id', 'recommended_artist_id');
    }

    public function children(): BelongsToMany
    {
        return $this->belongsToMany('\App\Models\Artist', 'artist_children', 'parent_id', 'child_id');
    }

    // public function parent(): HasOneThrough
    // {
    //     return $this->hasOneThrough('\App\Models\Artist', '\App\Models\ArtistChild', 'child_id', 'id', 'id', 'parent_id');
    // }

    public function parents(): BelongsToMany
    {
        return $this->belongsToMany('\App\Models\Artist', 'artist_children', 'child_id', 'parent_id');
    }

    // 編曲した曲
    public function composer_music(): BelongsToMany
    {
        return $this->belongsToMany('\App\Models\Music', 'music_composers', 'artist_id', 'music_id');
    }

    // 作詞した曲
    public function lyricist_music(): BelongsToMany
    {
        return $this->belongsToMany('\App\Models\Music', 'music_lyricists', 'artist_id', 'music_id');
    }

    // 編曲した曲
    public function arranger_music(): BelongsToMany
    {
        return $this->belongsToMany('\App\Models\Music', 'music_arrangers', 'artist_id', 'music_id');
    }

    // ミックスした動画
    public function mixer_videos(): BelongsToMany
    {
        return $this->belongsToMany('\App\Models\Video', 'video_mixers', 'artist_id', 'video_id');
    }

    // オフボーカルを担当した動画
    public function off_vocal_videos(): BelongsToMany
    {
        return $this->belongsToMany('\App\Models\Video', 'video_off_vocals', 'artist_id', 'video_id');
    }

    // アレンジを担当した動画
    public function arranger_videos(): BelongsToMany
    {
        return $this->belongsToMany('\App\Models\Video', 'video_arrangers', 'artist_id', 'video_id');
    }

    // 歌った動画
    public function singer_videos(): BelongsToMany
    {
        return $this->belongsToMany('\App\Models\Video', 'video_singers', 'artist_id', 'video_id');
    }

    // 歌った動画の曲
    // public function songMusic()
    // {
    //     return $this->belongToMany('\App\Models\Music', 'video_singers', 'artist_id', 'video_id');
    // }
}
