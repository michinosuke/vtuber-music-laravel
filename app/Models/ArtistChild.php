<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistChild extends Model
{
    use HasFactory;

    protected $casts = [
        'parent_id' => 'string',
        'child_id' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
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

    public function parent(): BelongsTo
    {
        return $this->belongsTo('\App\Models\Artist');
    }

    public function child(): BelongsTo
    {
        return $this->belongsTo('\App\Models\Artist');
    }
}
