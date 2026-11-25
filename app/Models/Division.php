<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany, HasManyThrough, MorphMany, MorphTo};

class Division extends Model
{
    protected $fillable = [
        'conference_id',
        'name',
    ];
    
    public function conference(): BelongsTo{
        return $this->belongsTo(Conference::class);
    }
    public function teams(): HasMany{
        return $this->hasMany(Team::class);
    }
}
