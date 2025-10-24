<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CardSituation extends Model
{
    use HasUuids;

    protected $primaryKey = 'uuid';

    public $timestamps = false;
    protected $fillable = [
        'card_uuid',
        'situation_uuid',
        'card_position',
        'situation_occurrence_uuid',
    ];

    public function card(): BelongsTo
    {
        return $this->belongsTo(Card::class, 'card_uuid', 'uuid');
    }

    public function situation(): BelongsTo
    {
        return $this->belongsTo(Situation::class, 'situation_uuid', 'uuid');
    }

    public function situation_occurrence(): BelongsTo
    {
        return $this->belongsTo(SituationOccurrence::class, 'situation_occurrence_uuid', 'uuid');
    }
}
