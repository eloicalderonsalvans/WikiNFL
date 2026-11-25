<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany, HasManyThrough, MorphMany, MorphTo};

class Player extends Model
{
    protected $fillable = ['team_id', 'first_name', 'last_name', 'slug', 'position', 'jersey_number', 'college', 'birth_date', 'draft_year', 'status', 'photo_url', 'bio'];
    protected $casts = ['birth_date' => 'date'];
    public function team(): BelongsTo { return $this->belongsTo(Team::class); }
    public function favorites(): MorphMany { return $this->morphMany(Favorite::class, 'favoritable'); }
    public function getFullNameAttribute(): string { return "{$this->first_name} {$this->last_name}"; }
}
