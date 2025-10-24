<?php

namespace App\Helpers;

use App\Models\Card;
use App\Models\CardSituation;
use App\Models\Situation;
use Illuminate\Support\Collection;

class SituationHelper
{
    public function recordOccurrence(Situation $situation): void
    {
        $occurrence = $situation->occurrences()->create([
            'reported_by_user_uuid' => auth()->user()->uuid,
        ]);

        CardSituation::where('situation_uuid', $situation->uuid)
            ->whereNull('situation_occurrence_uuid')
            ->update(['situation_occurrence_uuid' => $occurrence->uuid]);

        $this->markCardsWithBingo();
    }


    /**
     * Find all cards that have at least one bingo (horizontal, vertical, or diagonal).
     *
     * @return Collection<Card>
     */
    public function markCardsWithBingo(): Collection
    {
        // Winning lines by card_position (5x5 grid, free space at 13)
        $lines = [
            [1, 2, 3, 4, 5],
            [6, 7, 8, 9, 10],
            [11, 12, 13, 14, 15],
            [16, 17, 18, 19, 20],
            [21, 22, 23, 24, 25],
            [1, 6, 11, 16, 21],
            [2, 7, 12, 17, 22],
            [3, 8, 13, 18, 23],
            [4, 9, 14, 19, 24],
            [5, 10, 15, 20, 25],
            [1, 7, 13, 19, 25],
            [5, 9, 13, 17, 21],
        ];

        $cards = Card::with('cardSituations')->whereNull('bingo_at')->get();

        return $cards->filter(function (Card $card) use ($lines) {
            $map = [];
            foreach ($card->cardSituations as $cs) {
                $map[$cs->card_position] =
                    ($cs->situation_occurrence_uuid !== null) ||
                    ($cs->card_position === 13);
            }
            // Ensure free center is always true
            $map[13] = true;

            foreach ($lines as $line) {
                foreach ($line as $pos) {
                    if (empty($map[$pos])) {
                        continue 2;
                    }
                }
                // All positions matched
                $card->bingo_at = now();
                $card->save();
                return true;
            }
            return false;
        });
    }
}
