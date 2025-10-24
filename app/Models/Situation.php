<?php

namespace App\Models;

use Database\Factories\SituationFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Situation extends Model
{

    /** @use HasFactory<SituationFactory> */
    use HasFactory;
    use HasUuids;

    protected $primaryKey = 'uuid';

    public $timestamps = false;
    protected $fillable = [
        'name'
    ];

    /**
     * Scope a query to situations not yet assigned to the given card.
     *
     * @param Builder $query
     * @param Card $card
     * @return Builder
     */
    public function scopeAvailableForCard(Builder $query, Card $card): Builder
    {
        return $query->whereNotIn('uuid', function ($sub) use ($card) {
            $sub->select('situation_uuid')
                ->from('card_situations')
                ->where('card_uuid', $card->uuid)
                ->whereNotNull('situation_uuid');
        });
    }

    public function occurrences(): HasMany
    {
        return $this->hasMany(SituationOccurrence::class, 'situation_uuid', 'uuid');
    }


}
