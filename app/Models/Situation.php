<?php

namespace App\Models;

use Database\Factories\SituationFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
