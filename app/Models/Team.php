<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany, HasManyThrough, MorphMany, MorphTo};

class Team extends Model
{
    protected $fillable = [
    'division_id', 'city', 'name', 'abbreviation', 'slug', 'logo_url', 'stadium', 'founded_year',
    'championships', 'super_bowl_titles', 'super_bowl_appearances', 'playoff_appearances',
    'owner', 'head_coach',
    ];

    public function division(): BelongsTo { return $this->belongsTo(Division::class); }
    public function players(): HasMany { return $this->hasMany(Player::class); }
    public function homeGames(): HasMany { return $this->hasMany(Game::class, 'home_team_id'); }
    public function awayGames(): HasMany { return $this->hasMany(Game::class, 'away_team_id'); }
    public function standings(): HasMany { return $this->hasMany(Standing::class); }
    public function historyEvents(): HasMany { return $this->hasMany(HistoryEvent::class); }
    public function favorites(): MorphMany { return $this->morphMany(Favorite::class, 'favoritable'); }
    public function getFullNameAttribute(): string { return "{$this->city} {$this->name}"; }


}
