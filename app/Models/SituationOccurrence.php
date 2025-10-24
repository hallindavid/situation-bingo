<?php

namespace App\Models;

use Database\Factories\SituationOccurrenceFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SituationOccurrence extends Model
{
    /** @use HasFactory<SituationOccurrenceFactory> */
    use HasFactory;
    use HasUuids;

    public $primaryKey = 'uuid';

    protected $fillable = [
        'reported_by_user_uuid'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'reported_by_user_uuid', 'uuid');
    }

    public function situation(): BelongsTo
    {
        return $this->belongsTo(Situation::class, 'situation_uuid', 'uuid');
    }


}
