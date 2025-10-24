<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property string $uuid
 * @property string $user_uuid
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CardSituation> $cardSituations
 * @property-read int|null $card_situations_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\CardFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Card newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Card newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Card query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Card whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Card whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Card whereUserUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Card whereUuid($value)
 */
	class Card extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $uuid
 * @property string $card_uuid
 * @property int $card_position
 * @property string|null $situation_uuid
 * @property string|null $situation_occurrence_uuid
 * @property-read \App\Models\Card $card
 * @property-read \App\Models\Situation|null $situation
 * @property-read \App\Models\SituationOccurrence|null $situation_occurrence
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CardSituation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CardSituation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CardSituation query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CardSituation whereCardPosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CardSituation whereCardUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CardSituation whereSituationOccurrenceUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CardSituation whereSituationUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CardSituation whereUuid($value)
 */
	class CardSituation extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $uuid
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Situation availableForCard(\App\Models\Card $card)
 * @method static \Database\Factories\SituationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Situation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Situation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Situation query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Situation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Situation whereUuid($value)
 */
	class Situation extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $uuid
 * @property string $situation_uuid
 * @property string|null $reported_by_user_uuid
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Situation $situation
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\SituationOccurrenceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SituationOccurrence newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SituationOccurrence newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SituationOccurrence query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SituationOccurrence whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SituationOccurrence whereReportedByUserUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SituationOccurrence whereSituationUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SituationOccurrence whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SituationOccurrence whereUuid($value)
 */
	class SituationOccurrence extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $uuid
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Card> $cards
 * @property-read int|null $cards_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUuid($value)
 */
	class User extends \Eloquent {}
}

