<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \App\Helpers\CardHelper
 *
 * @method static void generateCards()
 * @method static void clearSituationsForCard(\App\Models\Card $card)
 * @method static void generateSituationsForCard(\App\Models\Card $card)
 */
class CardHelper extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'cardHelper';
    }
}
