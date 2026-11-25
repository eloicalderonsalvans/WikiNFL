<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany, HasManyThrough, MorphMany, MorphTo};

class Season extends Model
{
    protected $fillable = ['year', 'phase'];
    public function games(): HasMany { return $this->hasMany(Game::class); }
    public function standings(): HasMany { return $this->hasMany(Standing::class); }
}