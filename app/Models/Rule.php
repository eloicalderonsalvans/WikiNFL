<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany, HasManyThrough, MorphMany, MorphTo};

class Rule extends Model
{
    protected $fillable = ['category', 'title', 'slug', 'body', 'sort_order'];
}