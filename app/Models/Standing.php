<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany, HasManyThrough, MorphMany, MorphTo};

class Standing extends Model
{
    protected $fillable = ['season_id', 'team_id', 'wins', 'losses', 'ties'];
    public function season(): BelongsTo { return $this->belongsTo(Season::class); }
    public function team(): BelongsTo { return $this->belongsTo(Team::class); }
}
