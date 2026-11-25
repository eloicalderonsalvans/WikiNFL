<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany, HasManyThrough, MorphMany, MorphTo};

class Conference extends Model
{
    protected $fillable = ['name','abreviation'];

    public function divisions():HasMany   {
        return $this->hasMany(Division::class);
    }
    
    public function teams():HasManyThrough   {
        return $this->hasManyThrough(Team::class, Division::class);
    }

}
