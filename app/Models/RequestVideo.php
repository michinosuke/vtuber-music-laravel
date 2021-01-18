<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class RequestVideo extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'stage' => 'integer',
        'content' => 'string',
        'contributor_twitter_id' => 'string',
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

    public function scopeNotDone(Builder $query): Builder
    {
        return $query->where('is_done', false);
    }

    public function scopeCountByDay(Builder $query): Builder
    {
        return $query->select([DB::raw('CAST(created_at as DATE) as created_at'), DB::raw('COUNT(*) as count')])->groupBy('created_at');
    }
}
