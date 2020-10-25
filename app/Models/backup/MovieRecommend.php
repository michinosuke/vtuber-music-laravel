<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoRecommend extends Model
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

    public function video()
    {
        return $this->belongsTo('\App\Models\Video');
    }

    public function recommendedVideo()
    {
        return $this->belongsTo('\App\Models\Video', 'recommended_video_id');
    }
}
