<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany, HasManyThrough, MorphMany, MorphTo};

class HistoryEvent extends Model
{
    protected $fillable = ['year', 'title', 'body', 'team_id'];
    public function team(): BelongsTo { return $this->belongsTo(Team::class); }
}