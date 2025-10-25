<?php

namespace App\Helpers;

use App\Models\Card;
use App\Models\CardSituation;
use App\Models\Situation;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CardHelper
{

    /**
     * Generate bingo cards.
     *
     * @return mixed
     */
    public function generateCards(): void
    {
        // In this function, we want to make sure that every registered user has a bingo card.

        // I know this isn't a scalable implementation, but we'd fix it for a larger user base.

        User::all()->each(function (User $user) {
            if ($user->cards()->count() === 0) {
                $user->cards()->create();
            }
        });

        Card::all()->each(function (Card $card) {
            for ($i = 1; $i <= 16; $i++) {

                $cardSituation = $card->cardSituations()->where('card_position', $i)->first();

                if ($cardSituation === null) {
                    // If the card situation doesn't exist, create it with null values.

                    $selected_situation = Situation::availableForCard($card)->inRandomOrder()->first();

                    $card->cardSituations()->create([
                        'card_position' => $i,
                        'situation_uuid' => $selected_situation->uuid,
                        'situation_occurrence_uuid' => null,
                    ]);
                } elseif ($cardSituation->situation_uuid === null) {
                    $selected_situation = Situation::availableForCard($card)->inRandomOrder()->first();
                    $cardSituation->situation_uuid = $selected_situation->uuid;
                    $cardSituation->save();
                }
            }
        });
    }

    public function clearSituationsForCard(Card $card): void
    {
        $card->cardSituations()->update(['situation_uuid' => null]);
    }

    public function generateSituationsForCard(Card $card): void
    {
        DB::table('card_situations')->where('card_uuid', $card->uuid)->update(['situation_uuid' => null]);

        $cardSituations = $card->cardSituations()->where('situation_uuid', null)->get();

        $cardSituations->each(function (CardSituation $cardSituation) {
            // Find a situation id that is available for this card.
            $selected_situation = Situation::availableForCard($cardSituation->card)->inRandomOrder()->first();
            $cardSituation->situation_uuid = $selected_situation->uuid;
            $cardSituation->save();
        });
    }

}
