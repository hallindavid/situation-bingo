<?php

namespace App\Helpers;

use App\Models\Card;
use App\Models\CardSituation;
use App\Models\Situation;
use App\Models\SituationOccurrence;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class SituationHelper
{

    public function resetAllOccurrences(): void
    {
        DB::table('cards')->update(['bingo_at' => null]);
        DB::table('card_situations')->update(['situation_occurrence_uuid' => null]);
        DB::table('situation_occurrences')->delete();
    }

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
        // Winning lines by card_position (4x4 grid)
        $lines = [
            [1, 2, 3, 4],
            [5, 6, 7, 8],
            [9, 10, 11, 12],
            [13, 14, 15, 16],
            [1, 5, 9, 13],
            [2, 6, 10, 14],
            [3, 7, 11, 15],
            [4, 8, 12, 16],
            [1, 6, 11, 16],
            [4, 7, 10, 13],
        ];

        $cards = Card::with('cardSituations')->whereNull('bingo_at')->get();

        return $cards->filter(function (Card $card) use ($lines) {
            $map = [];
            foreach ($card->cardSituations as $cs) {
                $map[$cs->card_position] = ($cs->situation_occurrence_uuid !== null);
            }

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
