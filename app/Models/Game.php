<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany, HasManyThrough, MorphMany, MorphTo};

class Game extends Model
{
    protected $fillable = ['season_id', 'home_team_id', 'away_team_id', 'week', 'kickoff_at', 'home_score', 'away_score', 'status'];
    protected $casts = ['kickoff_at' => 'datetime'];
    public function season(): BelongsTo { return $this->belongsTo(Season::class); }
    public function homeTeam(): BelongsTo { return $this->belongsTo(Team::class, 'home_team_id'); }
    public function awayTeam(): BelongsTo { return $this->belongsTo(Team::class, 'away_team_id'); }
}
