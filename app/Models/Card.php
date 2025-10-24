<?php

namespace App\Models;

use Database\Factories\CardFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Card extends Model
{
    /** @use HasFactory<CardFactory> */
    use HasFactory;
    use HasUuids;

    protected $primaryKey = 'uuid';
    protected $fillable = [
        'user_uuid'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_uuid','uuid');
    }

    public function cardSituations(): HasMany
    {
        return $this->hasMany(CardSituation::class, 'card_uuid','uuid');
    }
}
