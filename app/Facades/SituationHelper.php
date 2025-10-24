<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \App\Helpers\SituationHelper
 *
 * @method static mixed generateCards()
 */
class SituationHelper extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'situationHelper';
    }
}
