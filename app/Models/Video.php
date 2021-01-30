<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;

class Video extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'music_id' => 'string',
        'release_date' => 'date',
        'is_mv' => 'boolean',
        'original_video_id' => 'string',
        'custom_music_name' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

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

    protected $guarded = [];

    public function music(): BelongsTo
    {
        return $this->belongsTo('\App\Models\Music');
    }

    public function singers(): BelongsToMany
    {
        return $this->belongsToMany('\App\Models\Artist', 'video_singers', 'video_id', 'artist_id');
    }

    public function mixers(): BelongsToMany
    {
        return $this->belongsToMany('\App\Models\Artist', 'video_mixers', 'video_id', 'artist_id');
    }

    public function off_vocals(): BelongsToMany
    {
        return $this->belongsToMany('\App\Models\Artist', 'video_off_vocals', 'video_id', 'artist_id');
    }

    public function arrangers(): BelongsToMany
    {
        return $this->belongsToMany('\App\Models\Artist', 'video_arrangers', 'video_id', 'artist_id');
    }

    public function recommends(): BelongsToMany
    {
        return $this->belongsToMany('\App\Models\Video', 'video_recommends', 'video_id', 'recommended_video_id');
    }

    public function actions(): HasMany
    {
        return $this->hasMany('\App\Models\VideoAction');
    }

    public function tags(): HasMany
    {
        return $this->hasMany('\App\Models\VideoTag');
    }

    public function scopeNotDeleted(Builder $query): Builder
    {
        return $query->where('is_deleted', false);
    }
}
