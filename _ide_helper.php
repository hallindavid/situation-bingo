<?php
/* @noinspection ALL */
// @formatter:off
// phpcs:ignoreFile

/**
 * A helper file for Laravel, to provide autocomplete information to your IDE
 * Generated for Laravel 12.35.1.
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */
namespace App\Facades {
    /**
     * @see \App\Helpers\CardHelper
     */
    class CardHelper {
        /**
         * Generate bingo cards.
         *
         * @return mixed
         * @static
         */
        public static function generateCards()
        {
            /** @var \App\Helpers\CardHelper $instance */
            return $instance->generateCards();
        }

        /**
         * @static
         */
        public static function generateSituationsForCard($card)
        {
            /** @var \App\Helpers\CardHelper $instance */
            return $instance->generateSituationsForCard($card);
        }

            }
    }

namespace AnourValar\EloquentSerialize\Facades {
    /**
     */
    class EloquentSerializeFacade {
        /**
         * Pack
         *
         * @param \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Relations\Relation $builder
         * @return string
         * @throws \RuntimeException
         * @static
         */
        public static function serialize($builder)
        {
            /** @var \AnourValar\EloquentSerialize\Service $instance */
            return $instance->serialize($builder);
        }

        /**
         * Unpack
         *
         * @param mixed $package
         * @throws \LogicException
         * @return \Illuminate\Database\Eloquent\Builder
         * @static
         */
        public static function unserialize($package)
        {
            /** @var \AnourValar\EloquentSerialize\Service $instance */
            return $instance->unserialize($package);
        }

            }
    }

namespace Flux {
    /**
     * @see \Flux\FluxManager
     */
    class Flux {
        /**
         * @static
         */
        public static function boot()
        {
            /** @var \Flux\FluxManager $instance */
            return $instance->boot();
        }

        /**
         * @static
         */
        public static function ensurePro()
        {
            /** @var \Flux\FluxManager $instance */
            return $instance->ensurePro();
        }

        /**
         * @static
         */
        public static function pro()
        {
            /** @var \Flux\FluxManager $instance */
            return $instance->pro();
        }

        /**
         * @static
         */
        public static function markAssetsRendered()
        {
            /** @var \Flux\FluxManager $instance */
            return $instance->markAssetsRendered();
        }

        /**
         * @static
         */
        public static function scripts($options = [])
        {
            /** @var \Flux\FluxManager $instance */
            return $instance->scripts($options);
        }

        /**
         * @static
         */
        public static function fluxAppearance($options = [])
        {
            /** @var \Flux\FluxManager $instance */
            return $instance->fluxAppearance($options);
        }

        /**
         * @static
         */
        public static function editorStyles()
        {
            /** @var \Flux\FluxManager $instance */
            return $instance->editorStyles();
        }

        /**
         * @static
         */
        public static function editorScripts()
        {
            /** @var \Flux\FluxManager $instance */
            return $instance->editorScripts();
        }

        /**
         * @static
         */
        public static function classes($styles = null)
        {
            /** @var \Flux\FluxManager $instance */
            return $instance->classes($styles);
        }

        /**
         * @static
         */
        public static function disallowWireModel($attributes, $componentName)
        {
            /** @var \Flux\FluxManager $instance */
            return $instance->disallowWireModel($attributes, $componentName);
        }

        /**
         * @static
         */
        public static function splitAttributes($attributes, $by = [], $strict = false)
        {
            /** @var \Flux\FluxManager $instance */
            return $instance->splitAttributes($attributes, $by, $strict);
        }

        /**
         * @static
         */
        public static function restorePassThroughProps($attributes, $passThroughProps)
        {
            /** @var \Flux\FluxManager $instance */
            return $instance->restorePassThroughProps($attributes, $passThroughProps);
        }

        /**
         * @static
         */
        public static function forwardedAttributes($attributes, $propKeys)
        {
            /** @var \Flux\FluxManager $instance */
            return $instance->forwardedAttributes($attributes, $propKeys);
        }

        /**
         * @static
         */
        public static function attributesAfter($prefix, $attributes, $default = [])
        {
            /** @var \Flux\FluxManager $instance */
            return $instance->attributesAfter($prefix, $attributes, $default);
        }

        /**
         * @static
         */
        public static function applyInset($inset, $top, $right, $bottom, $left)
        {
            /** @var \Flux\FluxManager $instance */
            return $instance->applyInset($inset, $top, $right, $bottom, $left);
        }

        /**
         * @static
         */
        public static function componentExists($name)
        {
            /** @var \Flux\FluxManager $instance */
            return $instance->componentExists($name);
        }

        /**
         * @static
         */
        public static function bootComponents()
        {
            /** @var \Flux\FluxManager $instance */
            return $instance->bootComponents();
        }

        /**
         * @static
         */
        public static function bootModal()
        {
            /** @var \Flux\FluxManager $instance */
            return $instance->bootModal();
        }

        /**
         * @static
         */
        public static function modal($name)
        {
            /** @var \Flux\FluxManager $instance */
            return $instance->modal($name);
        }

        /**
         * @static
         */
        public static function modals()
        {
            /** @var \Flux\FluxManager $instance */
            return $instance->modals();
        }

        /**
         * @static
         */
        public static function toast($text, $heading = null, $duration = 5000, $variant = null, $position = null)
        {
            /** @var \Flux\FluxManager $instance */
            return $instance->toast($text, $heading, $duration, $variant, $position);
        }

            }
    }

namespace Livewire {
    /**
     * @see \Livewire\LivewireManager
     */
    class Livewire extends \Livewire\LivewireManager {
        /**
         * {@inheritDoc}
         *
         * @static
         */
        public static function mount($name, $params = [], $key = null)
        {
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->mount($name, $params, $key);
        }

        /**
         * {@inheritDoc}
         *
         * @static
         */
        public static function update($snapshot, $diff, $calls)
        {
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->update($snapshot, $diff, $calls);
        }

        /**
         * @static
         */
        public static function setProvider($provider)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->setProvider($provider);
        }

        /**
         * @static
         */
        public static function provide($callback)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->provide($callback);
        }

        /**
         * @static
         */
        public static function component($name, $class = null)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->component($name, $class);
        }

        /**
         * @static
         */
        public static function componentHook($hook)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->componentHook($hook);
        }

        /**
         * @static
         */
        public static function propertySynthesizer($synth)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->propertySynthesizer($synth);
        }

        /**
         * @static
         */
        public static function directive($name, $callback)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->directive($name, $callback);
        }

        /**
         * @static
         */
        public static function precompiler($callback)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->precompiler($callback);
        }

        /**
         * @static
         */
        public static function new($name, $id = null)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->new($name, $id);
        }

        /**
         * @static
         */
        public static function isDiscoverable($componentNameOrClass)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->isDiscoverable($componentNameOrClass);
        }

        /**
         * @static
         */
        public static function resolveMissingComponent($resolver)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->resolveMissingComponent($resolver);
        }

        /**
         * @static
         */
        public static function snapshot($component)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->snapshot($component);
        }

        /**
         * @static
         */
        public static function fromSnapshot($snapshot)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->fromSnapshot($snapshot);
        }

        /**
         * @static
         */
        public static function listen($eventName, $callback)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->listen($eventName, $callback);
        }

        /**
         * @static
         */
        public static function current()
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->current();
        }

        /**
         * @static
         */
        public static function findSynth($keyOrTarget, $component)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->findSynth($keyOrTarget, $component);
        }

        /**
         * @static
         */
        public static function updateProperty($component, $path, $value)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->updateProperty($component, $path, $value);
        }

        /**
         * @static
         */
        public static function isLivewireRequest()
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->isLivewireRequest();
        }

        /**
         * @static
         */
        public static function componentHasBeenRendered()
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->componentHasBeenRendered();
        }

        /**
         * @static
         */
        public static function forceAssetInjection()
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->forceAssetInjection();
        }

        /**
         * @static
         */
        public static function setUpdateRoute($callback)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->setUpdateRoute($callback);
        }

        /**
         * @static
         */
        public static function getUpdateUri()
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->getUpdateUri();
        }

        /**
         * @static
         */
        public static function setScriptRoute($callback)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->setScriptRoute($callback);
        }

        /**
         * @static
         */
        public static function useScriptTagAttributes($attributes)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->useScriptTagAttributes($attributes);
        }

        /**
         * @static
         */
        public static function withUrlParams($params)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->withUrlParams($params);
        }

        /**
         * @static
         */
        public static function withQueryParams($params)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->withQueryParams($params);
        }

        /**
         * @static
         */
        public static function withCookie($name, $value)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->withCookie($name, $value);
        }

        /**
         * @static
         */
        public static function withCookies($cookies)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->withCookies($cookies);
        }

        /**
         * @static
         */
        public static function withHeaders($headers)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->withHeaders($headers);
        }

        /**
         * @static
         */
        public static function withoutLazyLoading()
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->withoutLazyLoading();
        }

        /**
         * @static
         */
        public static function test($name, $params = [])
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->test($name, $params);
        }

        /**
         * @static
         */
        public static function visit($name)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->visit($name);
        }

        /**
         * @static
         */
        public static function actingAs($user, $driver = null)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->actingAs($user, $driver);
        }

        /**
         * @static
         */
        public static function isRunningServerless()
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->isRunningServerless();
        }

        /**
         * @static
         */
        public static function addPersistentMiddleware($middleware)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->addPersistentMiddleware($middleware);
        }

        /**
         * @static
         */
        public static function setPersistentMiddleware($middleware)
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->setPersistentMiddleware($middleware);
        }

        /**
         * @static
         */
        public static function getPersistentMiddleware()
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->getPersistentMiddleware();
        }

        /**
         * @static
         */
        public static function flushState()
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->flushState();
        }

        /**
         * @static
         */
        public static function originalUrl()
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->originalUrl();
        }

        /**
         * @static
         */
        public static function originalPath()
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->originalPath();
        }

        /**
         * @static
         */
        public static function originalMethod()
        {
            //Method inherited from \Livewire\LivewireManager 
            /** @var \Livewire\Volt\LivewireManager $instance */
            return $instance->originalMethod();
        }

            }
    /**
     */
    class Component {
        /**
         * @see \Flux\FluxManager::bootModal()
         * @param mixed $name
         * @static
         */
        public static function modal($name)
        {
            return \Livewire\Component::modal($name);
        }

            }
    }

namespace Illuminate\Support {
    /**
     */
    class Str {
        /**
         * @see \Filament\Support\SupportServiceProvider::packageBooted()
         * @param string $html
         * @return string
         * @static
         */
        public static function sanitizeHtml($html)
        {
            return \Illuminate\Support\Str::sanitizeHtml($html);
        }

        /**
         * @see \Filament\Support\SupportServiceProvider::packageBooted()
         * @param string $value
         * @return string
         * @static
         */
        public static function ucwords($value)
        {
            return \Illuminate\Support\Str::ucwords($value);
        }

            }
    /**
     */
    class Stringable {
        /**
         * @see \Filament\Support\SupportServiceProvider::packageBooted()
         * @return \Illuminate\Support\Stringable
         * @static
         */
        public static function sanitizeHtml()
        {
            return \Illuminate\Support\Stringable::sanitizeHtml();
        }

        /**
         * @see \Filament\Support\SupportServiceProvider::packageBooted()
         * @return \Illuminate\Support\Stringable
         * @static
         */
        public static function ucwords()
        {
            return \Illuminate\Support\Stringable::ucwords();
        }

            }
    }

namespace Illuminate\Http {
    /**
     */
    class Request extends \Symfony\Component\HttpFoundation\Request {
        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param array $rules
         * @param mixed $params
         * @static
         */
        public static function validate($rules, ...$params)
        {
            return \Illuminate\Http\Request::validate($rules, ...$params);
        }

        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param string $errorBag
         * @param array $rules
         * @param mixed $params
         * @static
         */
        public static function validateWithBag($errorBag, $rules, ...$params)
        {
            return \Illuminate\Http\Request::validateWithBag($errorBag, $rules, ...$params);
        }

        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $absolute
         * @static
         */
        public static function hasValidSignature($absolute = true)
        {
            return \Illuminate\Http\Request::hasValidSignature($absolute);
        }

        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static
         */
        public static function hasValidRelativeSignature()
        {
            return \Illuminate\Http\Request::hasValidRelativeSignature();
        }

        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $ignoreQuery
         * @param mixed $absolute
         * @static
         */
        public static function hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
        {
            return \Illuminate\Http\Request::hasValidSignatureWhileIgnoring($ignoreQuery, $absolute);
        }

        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $ignoreQuery
         * @static
         */
        public static function hasValidRelativeSignatureWhileIgnoring($ignoreQuery = [])
        {
            return \Illuminate\Http\Request::hasValidRelativeSignatureWhileIgnoring($ignoreQuery);
        }

            }
    }

namespace Illuminate\Database\Query {
    /**
     */
    class Builder {
        /**
         * @see \Kirschbaum\PowerJoins\Mixins\QueryBuilderExtraMethods::getGroupBy()
         * @static
         */
        public static function getGroupBy()
        {
            return \Illuminate\Database\Query\Builder::getGroupBy();
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\QueryBuilderExtraMethods::getSelect()
         * @static
         */
        public static function getSelect()
        {
            return \Illuminate\Database\Query\Builder::getSelect();
        }

            }
    }

namespace Illuminate\Database\Eloquent\Relations {
    /**
     * @template TRelatedModel of \Illuminate\Database\Eloquent\Model
     * @template TDeclaringModel of \Illuminate\Database\Eloquent\Model
     * @template TResult
     * @mixin \Illuminate\Database\Eloquent\Builder<TRelatedModel>
     */
    class Relation {
        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoins()
         * @param mixed $builder
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @param string|null $morphable
         * @param bool $hasCheck
         * @static
         */
        public static function performJoinForEloquentPowerJoins($builder, $joinType = 'leftJoin', $callback = null, $alias = null, $disableExtraConditions = false, $morphable = null, $hasCheck = false)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoins($builder, $joinType, $callback, $alias, $disableExtraConditions, $morphable, $hasCheck);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoinsForBelongsTo()
         * @param mixed $query
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @static
         */
        public static function performJoinForEloquentPowerJoinsForBelongsTo($query, $joinType, $callback = null, $alias = null, $disableExtraConditions = false)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoinsForBelongsTo($query, $joinType, $callback, $alias, $disableExtraConditions);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoinsForBelongsToMany()
         * @param mixed $builder
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @static
         */
        public static function performJoinForEloquentPowerJoinsForBelongsToMany($builder, $joinType, $callback = null, $alias = null, $disableExtraConditions = false)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoinsForBelongsToMany($builder, $joinType, $callback, $alias, $disableExtraConditions);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoinsForMorphToMany()
         * @param mixed $builder
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @static
         */
        public static function performJoinForEloquentPowerJoinsForMorphToMany($builder, $joinType, $callback = null, $alias = null, $disableExtraConditions = false)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoinsForMorphToMany($builder, $joinType, $callback, $alias, $disableExtraConditions);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoinsForMorph()
         * @param mixed $builder
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @static
         */
        public static function performJoinForEloquentPowerJoinsForMorph($builder, $joinType, $callback = null, $alias = null, $disableExtraConditions = false)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoinsForMorph($builder, $joinType, $callback, $alias, $disableExtraConditions);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoinsForMorphTo()
         * @param mixed $builder
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @param string|null $morphable
         * @static
         */
        public static function performJoinForEloquentPowerJoinsForMorphTo($builder, $joinType, $callback = null, $alias = null, $disableExtraConditions = false, $morphable = null)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoinsForMorphTo($builder, $joinType, $callback, $alias, $disableExtraConditions, $morphable);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoinsForHasMany()
         * @param mixed $builder
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @param bool $hasCheck
         * @static
         */
        public static function performJoinForEloquentPowerJoinsForHasMany($builder, $joinType, $callback = null, $alias = null, $disableExtraConditions = false, $hasCheck = false)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoinsForHasMany($builder, $joinType, $callback, $alias, $disableExtraConditions, $hasCheck);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoinsForHasManyThrough()
         * @param mixed $builder
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @static
         */
        public static function performJoinForEloquentPowerJoinsForHasManyThrough($builder, $joinType, $callback = null, $alias = null, $disableExtraConditions = false)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoinsForHasManyThrough($builder, $joinType, $callback, $alias, $disableExtraConditions);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performHavingForEloquentPowerJoins()
         * @param mixed $builder
         * @param mixed $operator
         * @param mixed $count
         * @param string|null $morphable
         * @static
         */
        public static function performHavingForEloquentPowerJoins($builder, $operator, $count, $morphable = null)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::performHavingForEloquentPowerJoins($builder, $operator, $count, $morphable);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::usesSoftDeletes()
         * @param mixed $model
         * @static
         */
        public static function usesSoftDeletes($model)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::usesSoftDeletes($model);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::getThroughParent()
         * @static
         */
        public static function getThroughParent()
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::getThroughParent();
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::getFarParent()
         * @static
         */
        public static function getFarParent()
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::getFarParent();
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::applyExtraConditions()
         * @param \Kirschbaum\PowerJoins\PowerJoinClause $join
         * @static
         */
        public static function applyExtraConditions($join)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::applyExtraConditions($join);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::applyBasicCondition()
         * @param mixed $join
         * @param mixed $condition
         * @static
         */
        public static function applyBasicCondition($join, $condition)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::applyBasicCondition($join, $condition);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::applyNullCondition()
         * @param mixed $join
         * @param mixed $condition
         * @static
         */
        public static function applyNullCondition($join, $condition)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::applyNullCondition($join, $condition);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::applyNotNullCondition()
         * @param mixed $join
         * @param mixed $condition
         * @static
         */
        public static function applyNotNullCondition($join, $condition)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::applyNotNullCondition($join, $condition);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::applyNestedCondition()
         * @param mixed $join
         * @param mixed $condition
         * @static
         */
        public static function applyNestedCondition($join, $condition)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::applyNestedCondition($join, $condition);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::shouldNotApplyExtraCondition()
         * @param mixed $condition
         * @static
         */
        public static function shouldNotApplyExtraCondition($condition)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::shouldNotApplyExtraCondition($condition);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::getPowerJoinExistenceCompareKey()
         * @static
         */
        public static function getPowerJoinExistenceCompareKey()
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::getPowerJoinExistenceCompareKey();
        }

            }
    }

namespace Illuminate\Routing {
    /**
     */
    class Route {
        /**
         * @see \Livewire\Features\SupportLazyLoading\SupportLazyLoading::registerRouteMacro()
         * @param mixed $enabled
         * @static
         */
        public static function lazy($enabled = true)
        {
            return \Illuminate\Routing\Route::lazy($enabled);
        }

            }
    }

namespace Livewire\Features\SupportTesting {
    /**
     * @mixin \Illuminate\Testing\TestResponse
     */
    class Testable {
        /**
         * @see \Filament\Actions\Testing\TestsActions::mountAction()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param array $arguments
         * @return static
         * @static
         */
        public static function mountAction($actions, $arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::mountAction($actions, $arguments);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::unmountAction()
         * @return static
         * @static
         */
        public static function unmountAction()
        {
            return \Livewire\Features\SupportTesting\Testable::unmountAction();
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::setActionData()
         * @param array $data
         * @return static
         * @static
         */
        public static function setActionData($data)
        {
            return \Livewire\Features\SupportTesting\Testable::setActionData($data);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionDataSet()
         * @param \Closure|array $data
         * @return static
         * @static
         */
        public static function assertActionDataSet($data)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionDataSet($data);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::callAction()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param array $data
         * @param array $arguments
         * @return static
         * @static
         */
        public static function callAction($actions, $data = [], $arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::callAction($actions, $data, $arguments);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::callMountedAction()
         * @param array $arguments
         * @return static
         * @static
         */
        public static function callMountedAction($arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::callMountedAction($arguments);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionExists()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param \Closure|null $checkActionUsing
         * @param \Closure|null $generateMessageUsing
         * @param array $arguments
         * @return static
         * @static
         */
        public static function assertActionExists($actions, $checkActionUsing = null, $generateMessageUsing = null, $arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionExists($actions, $checkActionUsing, $generateMessageUsing, $arguments);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionDoesNotExist()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param \Closure|null $checkActionUsing
         * @param \Closure|null $generateMessageUsing
         * @return static
         * @static
         */
        public static function assertActionDoesNotExist($actions, $checkActionUsing = null, $generateMessageUsing = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionDoesNotExist($actions, $checkActionUsing, $generateMessageUsing);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionVisible()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param array $arguments
         * @return static
         * @static
         */
        public static function assertActionVisible($actions, $arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionVisible($actions, $arguments);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionHidden()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param array $arguments
         * @return static
         * @static
         */
        public static function assertActionHidden($actions, $arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionHidden($actions, $arguments);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionEnabled()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @return static
         * @static
         */
        public static function assertActionEnabled($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionEnabled($actions);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionDisabled()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @return static
         * @static
         */
        public static function assertActionDisabled($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionDisabled($actions);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionHasIcon()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param \BackedEnum|string $icon
         * @return static
         * @static
         */
        public static function assertActionHasIcon($actions, $icon)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionHasIcon($actions, $icon);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionDoesNotHaveIcon()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param \BackedEnum|string $icon
         * @return static
         * @static
         */
        public static function assertActionDoesNotHaveIcon($actions, $icon)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionDoesNotHaveIcon($actions, $icon);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionHasLabel()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param string $label
         * @return static
         * @static
         */
        public static function assertActionHasLabel($actions, $label)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionHasLabel($actions, $label);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionDoesNotHaveLabel()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param string $label
         * @return static
         * @static
         */
        public static function assertActionDoesNotHaveLabel($actions, $label)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionDoesNotHaveLabel($actions, $label);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionHasColor()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param array|string $color
         * @return static
         * @static
         */
        public static function assertActionHasColor($actions, $color)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionHasColor($actions, $color);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionDoesNotHaveColor()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param array|string $color
         * @return static
         * @static
         */
        public static function assertActionDoesNotHaveColor($actions, $color)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionDoesNotHaveColor($actions, $color);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionHasUrl()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param string $url
         * @return static
         * @static
         */
        public static function assertActionHasUrl($actions, $url)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionHasUrl($actions, $url);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionDoesNotHaveUrl()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param string $url
         * @return static
         * @static
         */
        public static function assertActionDoesNotHaveUrl($actions, $url)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionDoesNotHaveUrl($actions, $url);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionShouldOpenUrlInNewTab()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @return static
         * @static
         */
        public static function assertActionShouldOpenUrlInNewTab($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionShouldOpenUrlInNewTab($actions);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionShouldNotOpenUrlInNewTab()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @return static
         * @static
         */
        public static function assertActionShouldNotOpenUrlInNewTab($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionShouldNotOpenUrlInNewTab($actions);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionMounted()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @return static
         * @static
         */
        public static function assertActionMounted($actions = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionMounted($actions);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionNotMounted()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @return static
         * @static
         */
        public static function assertActionNotMounted($actions = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionNotMounted($actions);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertMountedActionModalSee()
         * @param array|string $values
         * @param mixed $escape
         * @static
         */
        public static function assertMountedActionModalSee($values, $escape = true)
        {
            return \Livewire\Features\SupportTesting\Testable::assertMountedActionModalSee($values, $escape);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertMountedActionModalDontSee()
         * @param array|string $values
         * @param bool $escape
         * @static
         */
        public static function assertMountedActionModalDontSee($values, $escape = true)
        {
            return \Livewire\Features\SupportTesting\Testable::assertMountedActionModalDontSee($values, $escape);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertMountedActionModalSeeHtml()
         * @param array|string $values
         * @static
         */
        public static function assertMountedActionModalSeeHtml($values)
        {
            return \Livewire\Features\SupportTesting\Testable::assertMountedActionModalSeeHtml($values);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertMountedActionModalDontSeeHtml()
         * @param array|string $values
         * @static
         */
        public static function assertMountedActionModalDontSeeHtml($values)
        {
            return \Livewire\Features\SupportTesting\Testable::assertMountedActionModalDontSeeHtml($values);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionMounted()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @return static
         * @static
         */
        public static function assertActionHalted($actions = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionHalted($actions);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionMounted()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @return static
         * @static
         */
        public static function assertActionHeld($actions = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionHeld($actions);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertHasActionErrors()
         * @param array $keys
         * @return static
         * @static
         */
        public static function assertHasActionErrors($keys = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasActionErrors($keys);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertHasNoActionErrors()
         * @param array $keys
         * @return static
         * @static
         */
        public static function assertHasNoActionErrors($keys = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasNoActionErrors($keys);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionListInOrder()
         * @param array $names
         * @param array $actions
         * @param string $actionType
         * @param string $actionClass
         * @return self
         * @static
         */
        public static function assertActionListInOrder($names, $actions, $actionType, $actionClass)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionListInOrder($names, $actions, $actionType, $actionClass);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::parseNestedActions()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param array $arguments
         * @param bool $areRelativeToMountedActions
         * @return array
         * @static
         */
        public static function parseNestedActions($actions, $arguments = [], $areRelativeToMountedActions = true)
        {
            return \Livewire\Features\SupportTesting\Testable::parseNestedActions($actions, $arguments, $areRelativeToMountedActions);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::getMountedActionModalHtml()
         * @return string
         * @static
         */
        public static function getMountedActionModalHtml()
        {
            return \Livewire\Features\SupportTesting\Testable::getMountedActionModalHtml();
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::fillForm()
         * @param \Closure|array $state
         * @param string|null $form
         * @return static
         * @static
         */
        public static function fillForm($state = [], $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::fillForm($state, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormSet()
         * @param \Closure|array $state
         * @param string $form
         * @return static
         * @static
         */
        public static function assertFormSet($state, $form = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormSet($state, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertHasFormErrors()
         * @param array $keys
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertHasFormErrors($keys = [], $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasFormErrors($keys, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertHasNoFormErrors()
         * @param array $keys
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertHasNoFormErrors($keys = [], $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasNoFormErrors($keys, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormExists()
         * @param string $name
         * @return static
         * @static
         */
        public static function assertFormExists($name = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormExists($name);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormComponentExists()
         * @param string $componentKey
         * @param \Closure|string $form
         * @param \Closure|null $checkComponentUsing
         * @return static
         * @static
         */
        public static function assertFormComponentExists($componentKey, $form = 'form', $checkComponentUsing = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentExists($componentKey, $form, $checkComponentUsing);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormComponentDoesNotExist()
         * @param string $componentKey
         * @param string $form
         * @return static
         * @static
         */
        public static function assertFormComponentDoesNotExist($componentKey, $form = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentDoesNotExist($componentKey, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldExists()
         * @param string $key
         * @param \Closure|string|null $form
         * @param \Closure|null $checkFieldUsing
         * @return static
         * @static
         */
        public static function assertFormFieldExists($key, $form = null, $checkFieldUsing = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldExists($key, $form, $checkFieldUsing);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldDoesNotExist()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldDoesNotExist($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldDoesNotExist($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldDisabled()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldDisabled($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldDisabled($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldDisabled()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldIsDisabled($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldIsDisabled($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldEnabled()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldEnabled($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldEnabled($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldEnabled()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldIsEnabled($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldIsEnabled($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldReadOnly()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldReadOnly($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldReadOnly($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldReadOnly()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldIsReadOnly($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldIsReadOnly($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldHidden()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldHidden($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldHidden($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldHidden()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldIsHidden($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldIsHidden($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldVisible()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldVisible($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldVisible($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldVisible()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldIsVisible($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldIsVisible($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::mountFormComponentAction()
         * @param array|string $components
         * @param array|string $actions
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function mountFormComponentAction($components, $actions, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::mountFormComponentAction($components, $actions, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::unmountFormComponentAction()
         * @return static
         * @static
         */
        public static function unmountFormComponentAction()
        {
            return \Livewire\Features\SupportTesting\Testable::unmountFormComponentAction();
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::setFormComponentActionData()
         * @param array $data
         * @return static
         * @static
         */
        public static function setFormComponentActionData($data)
        {
            return \Livewire\Features\SupportTesting\Testable::setFormComponentActionData($data);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionDataSet()
         * @param \Closure|array $data
         * @return static
         * @static
         */
        public static function assertFormComponentActionDataSet($data)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionDataSet($data);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::callFormComponentAction()
         * @param array|string $components
         * @param array|string $actions
         * @param array $data
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function callFormComponentAction($components, $actions, $data = [], $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::callFormComponentAction($components, $actions, $data, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::callMountedFormComponentAction()
         * @param array $arguments
         * @return static
         * @static
         */
        public static function callMountedFormComponentAction($arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::callMountedFormComponentAction($arguments);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionExists()
         * @param array|string $components
         * @param array|string $actions
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionExists($components, $actions, $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionExists($components, $actions, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionDoesNotExist()
         * @param array|string $components
         * @param array|string $actions
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionDoesNotExist($components, $actions, $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionDoesNotExist($components, $actions, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionVisible()
         * @param array|string $components
         * @param array|string $actions
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionVisible($components, $actions, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionVisible($components, $actions, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionHidden()
         * @param array|string $components
         * @param array|string $actions
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionHidden($components, $actions, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionHidden($components, $actions, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionEnabled()
         * @param array|string $components
         * @param array|string $actions
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionEnabled($components, $actions, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionEnabled($components, $actions, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionDisabled()
         * @param array|string $components
         * @param array|string $actions
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionDisabled($components, $actions, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionDisabled($components, $actions, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionHasIcon()
         * @param array|string $components
         * @param array|string $actions
         * @param \BackedEnum|string $icon
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionHasIcon($components, $actions, $icon, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionHasIcon($components, $actions, $icon, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionDoesNotHaveIcon()
         * @param array|string $components
         * @param array|string $actions
         * @param \BackedEnum|string $icon
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionDoesNotHaveIcon($components, $actions, $icon, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionDoesNotHaveIcon($components, $actions, $icon, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionHasLabel()
         * @param array|string $components
         * @param array|string $actions
         * @param string $label
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionHasLabel($components, $actions, $label, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionHasLabel($components, $actions, $label, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionDoesNotHaveLabel()
         * @param array|string $components
         * @param array|string $actions
         * @param string $label
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionDoesNotHaveLabel($components, $actions, $label, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionDoesNotHaveLabel($components, $actions, $label, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionHasColor()
         * @param array|string $components
         * @param array|string $actions
         * @param array|string $color
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionHasColor($components, $actions, $color, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionHasColor($components, $actions, $color, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionDoesNotHaveColor()
         * @param array|string $components
         * @param array|string $actions
         * @param array|string $color
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionDoesNotHaveColor($components, $actions, $color, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionDoesNotHaveColor($components, $actions, $color, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionHasUrl()
         * @param array|string $components
         * @param array|string $actions
         * @param string $url
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionHasUrl($components, $actions, $url, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionHasUrl($components, $actions, $url, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionDoesNotHaveUrl()
         * @param array|string $components
         * @param array|string $actions
         * @param string $url
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionDoesNotHaveUrl($components, $actions, $url, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionDoesNotHaveUrl($components, $actions, $url, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionShouldOpenUrlInNewTab()
         * @param array|string $components
         * @param array|string $actions
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionShouldOpenUrlInNewTab($components, $actions, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionShouldOpenUrlInNewTab($components, $actions, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionShouldNotOpenUrlInNewTab()
         * @param array|string $components
         * @param array|string $actions
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionShouldNotOpenUrlInNewTab($components, $actions, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionShouldNotOpenUrlInNewTab($components, $actions, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionMounted()
         * @param array|string $components
         * @param array|string $actions
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionMounted($components, $actions, $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionMounted($components, $actions, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionNotMounted()
         * @param array|string $components
         * @param array|string $actions
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionNotMounted($components, $actions, $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionNotMounted($components, $actions, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionMounted()
         * @param array|string $components
         * @param array|string $actions
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionHalted($components, $actions, $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionHalted($components, $actions, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertHasFormComponentActionErrors()
         * @param array $keys
         * @return static
         * @static
         */
        public static function assertHasFormComponentActionErrors($keys = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasFormComponentActionErrors($keys);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertHasNoFormComponentActionErrors()
         * @param array $keys
         * @return static
         * @static
         */
        public static function assertHasNoFormComponentActionErrors($keys = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasNoFormComponentActionErrors($keys);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::parseNestedFormComponentActions()
         * @param array|string $components
         * @param array|string $actions
         * @param string $form
         * @param array $arguments
         * @return array
         * @static
         */
        public static function parseNestedFormComponentActions($components, $actions, $form, $arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::parseNestedFormComponentActions($components, $actions, $form, $arguments);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::mountInfolistAction()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function mountInfolistAction($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::mountInfolistAction($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::unmountInfolistAction()
         * @return static
         * @static
         */
        public static function unmountInfolistAction()
        {
            return \Livewire\Features\SupportTesting\Testable::unmountInfolistAction();
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::setInfolistActionData()
         * @param array $data
         * @return static
         * @static
         */
        public static function setInfolistActionData($data)
        {
            return \Livewire\Features\SupportTesting\Testable::setInfolistActionData($data);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionDataSet()
         * @param \Closure|array $data
         * @return static
         * @static
         */
        public static function assertInfolistActionDataSet($data)
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionDataSet($data);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::callInfolistAction()
         * @param string $component
         * @param array|string $actions
         * @param array $data
         * @param array $arguments
         * @param string $schema
         * @return static
         * @static
         */
        public static function callInfolistAction($component, $actions, $data = [], $arguments = [], $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::callInfolistAction($component, $actions, $data, $arguments, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::callMountedInfolistAction()
         * @param array $arguments
         * @return static
         * @static
         */
        public static function callMountedInfolistAction($arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::callMountedInfolistAction($arguments);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionExists()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionExists($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionExists($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionDoesNotExist()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionDoesNotExist($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionDoesNotExist($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionVisible()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionVisible($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionVisible($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionHidden()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionHidden($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionHidden($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionEnabled()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionEnabled($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionEnabled($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionDisabled()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionDisabled($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionDisabled($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionHasIcon()
         * @param string $component
         * @param array|string $actions
         * @param \BackedEnum|string $icon
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionHasIcon($component, $actions, $icon, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionHasIcon($component, $actions, $icon, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionDoesNotHaveIcon()
         * @param string $component
         * @param array|string $actions
         * @param \BackedEnum|string $icon
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionDoesNotHaveIcon($component, $actions, $icon, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionDoesNotHaveIcon($component, $actions, $icon, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionHasLabel()
         * @param string $component
         * @param array|string $actions
         * @param string $label
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionHasLabel($component, $actions, $label, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionHasLabel($component, $actions, $label, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionDoesNotHaveLabel()
         * @param string $component
         * @param array|string $actions
         * @param string $label
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionDoesNotHaveLabel($component, $actions, $label, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionDoesNotHaveLabel($component, $actions, $label, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionHasColor()
         * @param string $component
         * @param array|string $actions
         * @param array|string $color
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionHasColor($component, $actions, $color, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionHasColor($component, $actions, $color, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionDoesNotHaveColor()
         * @param string $component
         * @param array|string $actions
         * @param array|string $color
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionDoesNotHaveColor($component, $actions, $color, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionDoesNotHaveColor($component, $actions, $color, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionHasUrl()
         * @param string $component
         * @param array|string $actions
         * @param string $url
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionHasUrl($component, $actions, $url, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionHasUrl($component, $actions, $url, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionDoesNotHaveUrl()
         * @param string $component
         * @param array|string $actions
         * @param string $url
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionDoesNotHaveUrl($component, $actions, $url, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionDoesNotHaveUrl($component, $actions, $url, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionShouldOpenUrlInNewTab()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionShouldOpenUrlInNewTab($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionShouldOpenUrlInNewTab($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionShouldNotOpenUrlInNewTab()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionShouldNotOpenUrlInNewTab($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionShouldNotOpenUrlInNewTab($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionMounted()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionMounted($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionMounted($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionNotMounted()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionNotMounted($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionNotMounted($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionMounted()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionHalted($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionHalted($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertHasInfolistActionErrors()
         * @param array $keys
         * @return static
         * @static
         */
        public static function assertHasInfolistActionErrors($keys = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasInfolistActionErrors($keys);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertHasNoInfolistActionErrors()
         * @param array $keys
         * @return static
         * @static
         */
        public static function assertHasNoInfolistActionErrors($keys = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasNoInfolistActionErrors($keys);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::parseNestedInfolistActions()
         * @param string $component
         * @param array|string $actions
         * @param string $infolist
         * @param array $arguments
         * @return array
         * @static
         */
        public static function parseNestedInfolistActions($component, $actions, $infolist, $arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::parseNestedInfolistActions($component, $actions, $infolist, $arguments);
        }

        /**
         * @see \Filament\Notifications\Testing\TestsNotifications::assertNotified()
         * @param \Filament\Notifications\Notification|string|null $notification
         * @return static
         * @static
         */
        public static function assertNotified($notification = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertNotified($notification);
        }

        /**
         * @see \Filament\Notifications\Testing\TestsNotifications::assertNotNotified()
         * @param \Filament\Notifications\Notification|string|null $notification
         * @return static
         * @static
         */
        public static function assertNotNotified($notification = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertNotNotified($notification);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::assertSchemaComponentExists()
         * @param string $key
         * @param string|null $schema
         * @param \Closure|null $checkComponentUsing
         * @return static
         * @static
         */
        public static function assertSchemaComponentExists($key, $schema = null, $checkComponentUsing = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertSchemaComponentExists($key, $schema, $checkComponentUsing);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::assertSchemaComponentDoesNotExist()
         * @param string $key
         * @param string|null $schema
         * @return static
         * @static
         */
        public static function assertSchemaComponentDoesNotExist($key, $schema = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertSchemaComponentDoesNotExist($key, $schema);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::assertSchemaExists()
         * @param string $name
         * @return static
         * @static
         */
        public static function assertSchemaExists($name)
        {
            return \Livewire\Features\SupportTesting\Testable::assertSchemaExists($name);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::assertSchemaStateSet()
         * @param \Closure|array $state
         * @param string|null $schema
         * @return static
         * @static
         */
        public static function assertSchemaStateSet($state, $schema = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertSchemaStateSet($state, $schema);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::assertSchemaComponentStateSet()
         * @param string $key
         * @param mixed|null $state
         * @param string|null $schema
         * @return static
         * @static
         */
        public static function assertSchemaComponentStateSet($key, $state, $schema = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertSchemaComponentStateSet($key, $state, $schema);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::assertSchemaComponentStateNotSet()
         * @param string $key
         * @param mixed|null $state
         * @param string|null $schema
         * @return static
         * @static
         */
        public static function assertSchemaComponentStateNotSet($key, $state, $schema = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertSchemaComponentStateNotSet($key, $state, $schema);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::assertWizardStepExists()
         * @param int $step
         * @param string|null $schema
         * @return static
         * @static
         */
        public static function assertWizardStepExists($step, $schema = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertWizardStepExists($step, $schema);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::assertWizardCurrentStep()
         * @param int $step
         * @param string|null $schema
         * @return static
         * @static
         */
        public static function assertWizardCurrentStep($step, $schema = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertWizardCurrentStep($step, $schema);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::goToWizardStep()
         * @param int $step
         * @param string|null $schema
         * @return static
         * @static
         */
        public static function goToWizardStep($step, $schema = null)
        {
            return \Livewire\Features\SupportTesting\Testable::goToWizardStep($step, $schema);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::goToNextWizardStep()
         * @param string|null $schema
         * @return static
         * @static
         */
        public static function goToNextWizardStep($schema = null)
        {
            return \Livewire\Features\SupportTesting\Testable::goToNextWizardStep($schema);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::goToPreviousWizardStep()
         * @param string|null $schema
         * @return static
         * @static
         */
        public static function goToPreviousWizardStep($schema = null)
        {
            return \Livewire\Features\SupportTesting\Testable::goToPreviousWizardStep($schema);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::mountTableAction()
         * @param array|string $actions
         * @param mixed $record
         * @return static
         * @static
         */
        public static function mountTableAction($actions, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::mountTableAction($actions, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::unmountTableAction()
         * @return static
         * @static
         */
        public static function unmountTableAction()
        {
            return \Livewire\Features\SupportTesting\Testable::unmountTableAction();
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::setTableActionData()
         * @param array $data
         * @return static
         * @static
         */
        public static function setTableActionData($data)
        {
            return \Livewire\Features\SupportTesting\Testable::setTableActionData($data);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionDataSet()
         * @param \Closure|array $data
         * @return static
         * @static
         */
        public static function assertTableActionDataSet($data)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionDataSet($data);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::callTableAction()
         * @param array|string $actions
         * @param mixed $record
         * @param array $data
         * @param array $arguments
         * @return static
         * @static
         */
        public static function callTableAction($actions, $record = null, $data = [], $arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::callTableAction($actions, $record, $data, $arguments);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::callMountedTableAction()
         * @param array $arguments
         * @return static
         * @static
         */
        public static function callMountedTableAction($arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::callMountedTableAction($arguments);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionExists()
         * @param array|string $actions
         * @param \Closure|null $checkActionUsing
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionExists($actions, $checkActionUsing = null, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionExists($actions, $checkActionUsing, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionDoesNotExist()
         * @param array|string $actions
         * @param \Closure|null $checkActionUsing
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionDoesNotExist($actions, $checkActionUsing = null, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionDoesNotExist($actions, $checkActionUsing, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionsExistInOrder()
         * @param array $names
         * @return static
         * @static
         */
        public static function assertTableActionsExistInOrder($names)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionsExistInOrder($names);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableHeaderActionsExistInOrder()
         * @param array $names
         * @return static
         * @static
         */
        public static function assertTableHeaderActionsExistInOrder($names)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableHeaderActionsExistInOrder($names);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableEmptyStateActionsExistInOrder()
         * @param array $names
         * @return static
         * @static
         */
        public static function assertTableEmptyStateActionsExistInOrder($names)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableEmptyStateActionsExistInOrder($names);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionVisible()
         * @param array|string $actions
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionVisible($actions, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionVisible($actions, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionHidden()
         * @param array|string $actions
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionHidden($actions, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionHidden($actions, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionEnabled()
         * @param array|string $actions
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionEnabled($actions, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionEnabled($actions, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionDisabled()
         * @param array|string $actions
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionDisabled($actions, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionDisabled($actions, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionHasIcon()
         * @param array|string $actions
         * @param \BackedEnum|string $icon
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionHasIcon($actions, $icon, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionHasIcon($actions, $icon, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionDoesNotHaveIcon()
         * @param array|string $actions
         * @param \BackedEnum|string $icon
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionDoesNotHaveIcon($actions, $icon, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionDoesNotHaveIcon($actions, $icon, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionHasLabel()
         * @param array|string $actions
         * @param string $label
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionHasLabel($actions, $label, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionHasLabel($actions, $label, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionDoesNotHaveLabel()
         * @param array|string $actions
         * @param string $label
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionDoesNotHaveLabel($actions, $label, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionDoesNotHaveLabel($actions, $label, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionHasColor()
         * @param array|string $actions
         * @param array|string $color
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionHasColor($actions, $color, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionHasColor($actions, $color, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionDoesNotHaveColor()
         * @param array|string $actions
         * @param array|string $color
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionDoesNotHaveColor($actions, $color, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionDoesNotHaveColor($actions, $color, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionHasUrl()
         * @param array|string $actions
         * @param string $url
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionHasUrl($actions, $url, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionHasUrl($actions, $url, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionDoesNotHaveUrl()
         * @param array|string $actions
         * @param string $url
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionDoesNotHaveUrl($actions, $url, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionDoesNotHaveUrl($actions, $url, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionShouldOpenUrlInNewTab()
         * @param array|string $actions
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionShouldOpenUrlInNewTab($actions, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionShouldOpenUrlInNewTab($actions, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionShouldNotOpenUrlInNewTab()
         * @param array|string $actions
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionShouldNotOpenUrlInNewTab($actions, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionShouldNotOpenUrlInNewTab($actions, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionMounted()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableActionMounted($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionMounted($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionNotMounted()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableActionNotMounted($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionNotMounted($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionMounted()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableActionHalted($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionHalted($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionMounted()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableActionHeld($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionHeld($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertHasTableActionErrors()
         * @param array $keys
         * @return static
         * @static
         */
        public static function assertHasTableActionErrors($keys = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasTableActionErrors($keys);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertHasNoTableActionErrors()
         * @param array $keys
         * @return static
         * @static
         */
        public static function assertHasNoTableActionErrors($keys = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasNoTableActionErrors($keys);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::parseNestedTableActions()
         * @param array|string $actions
         * @param mixed $record
         * @param array $arguments
         * @return array
         * @static
         */
        public static function parseNestedTableActions($actions, $record = null, $arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::parseNestedTableActions($actions, $record, $arguments);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::selectTableRecords()
         * @param \Illuminate\Support\Collection|array $records
         * @return static
         * @static
         */
        public static function selectTableRecords($records)
        {
            return \Livewire\Features\SupportTesting\Testable::selectTableRecords($records);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::mountTableBulkAction()
         * @param array|string $actions
         * @param \Illuminate\Support\Collection|array $records
         * @return static
         * @static
         */
        public static function mountTableBulkAction($actions, $records)
        {
            return \Livewire\Features\SupportTesting\Testable::mountTableBulkAction($actions, $records);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::setTableBulkActionData()
         * @param array $data
         * @return static
         * @static
         */
        public static function setTableBulkActionData($data)
        {
            return \Livewire\Features\SupportTesting\Testable::setTableBulkActionData($data);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionDataSet()
         * @param \Closure|array $data
         * @return static
         * @static
         */
        public static function assertTableBulkActionDataSet($data)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionDataSet($data);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::callTableBulkAction()
         * @param array|string $actions
         * @param \Illuminate\Support\Collection|array $records
         * @param array $data
         * @param array $arguments
         * @return static
         * @static
         */
        public static function callTableBulkAction($actions, $records, $data = [], $arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::callTableBulkAction($actions, $records, $data, $arguments);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::callMountedTableBulkAction()
         * @param array $arguments
         * @return static
         * @static
         */
        public static function callMountedTableBulkAction($arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::callMountedTableBulkAction($arguments);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionExists()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableBulkActionExists($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionExists($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionDoesNotExist()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableBulkActionDoesNotExist($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionDoesNotExist($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionsExistInOrder()
         * @param array $names
         * @return static
         * @static
         */
        public static function assertTableBulkActionsExistInOrder($names)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionsExistInOrder($names);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionVisible()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableBulkActionVisible($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionVisible($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionHidden()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableBulkActionHidden($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionHidden($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionEnabled()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableBulkActionEnabled($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionEnabled($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionDisabled()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableBulkActionDisabled($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionDisabled($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionHasIcon()
         * @param array|string $actions
         * @param \BackedEnum|string $icon
         * @return static
         * @static
         */
        public static function assertTableBulkActionHasIcon($actions, $icon)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionHasIcon($actions, $icon);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionDoesNotHaveIcon()
         * @param array|string $actions
         * @param \BackedEnum|string $icon
         * @return static
         * @static
         */
        public static function assertTableBulkActionDoesNotHaveIcon($actions, $icon)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionDoesNotHaveIcon($actions, $icon);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionHasLabel()
         * @param array|string $actions
         * @param string $label
         * @return static
         * @static
         */
        public static function assertTableBulkActionHasLabel($actions, $label)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionHasLabel($actions, $label);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionDoesNotHaveLabel()
         * @param array|string $actions
         * @param string $label
         * @return static
         * @static
         */
        public static function assertTableBulkActionDoesNotHaveLabel($actions, $label)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionDoesNotHaveLabel($actions, $label);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionHasColor()
         * @param array|string $actions
         * @param array|string $color
         * @return static
         * @static
         */
        public static function assertTableBulkActionHasColor($actions, $color)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionHasColor($actions, $color);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionDoesNotHaveColor()
         * @param array|string $actions
         * @param array|string $color
         * @return static
         * @static
         */
        public static function assertTableBulkActionDoesNotHaveColor($actions, $color)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionDoesNotHaveColor($actions, $color);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionMounted()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableBulkActionMounted($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionMounted($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionNotMounted()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableBulkActionNotMounted($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionNotMounted($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionMounted()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableBulkActionHalted($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionHalted($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionMounted()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableBulkActionHeld($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionHeld($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertHasTableBulkActionErrors()
         * @param array $keys
         * @return static
         * @static
         */
        public static function assertHasTableBulkActionErrors($keys = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasTableBulkActionErrors($keys);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertHasNoTableBulkActionErrors()
         * @param array $keys
         * @return static
         * @static
         */
        public static function assertHasNoTableBulkActionErrors($keys = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasNoTableBulkActionErrors($keys);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::parseNestedTableBulkActions()
         * @param array|string $actions
         * @return array
         * @static
         */
        public static function parseNestedTableBulkActions($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::parseNestedTableBulkActions($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertCanRenderTableColumn()
         * @param string $name
         * @return static
         * @static
         */
        public static function assertCanRenderTableColumn($name)
        {
            return \Livewire\Features\SupportTesting\Testable::assertCanRenderTableColumn($name);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertCanNotRenderTableColumn()
         * @param string $name
         * @return static
         * @static
         */
        public static function assertCanNotRenderTableColumn($name)
        {
            return \Livewire\Features\SupportTesting\Testable::assertCanNotRenderTableColumn($name);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnExists()
         * @param string $name
         * @param \Closure|null $checkColumnUsing
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableColumnExists($name, $checkColumnUsing = null, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnExists($name, $checkColumnUsing, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnDoesNotExist()
         * @param string $name
         * @param \Closure|null $checkColumnUsing
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableColumnDoesNotExist($name, $checkColumnUsing = null, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnDoesNotExist($name, $checkColumnUsing, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnVisible()
         * @param string $name
         * @return static
         * @static
         */
        public static function assertTableColumnVisible($name)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnVisible($name);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnHidden()
         * @param string $name
         * @return static
         * @static
         */
        public static function assertTableColumnHidden($name)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnHidden($name);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnStateSet()
         * @param string $name
         * @param mixed $state
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableColumnStateSet($name, $state, $record)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnStateSet($name, $state, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnStateNotSet()
         * @param string $name
         * @param mixed $state
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableColumnStateNotSet($name, $state, $record)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnStateNotSet($name, $state, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnFormattedStateSet()
         * @param string $name
         * @param mixed $state
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableColumnFormattedStateSet($name, $state, $record)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnFormattedStateSet($name, $state, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnFormattedStateNotSet()
         * @param string $name
         * @param mixed $state
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableColumnFormattedStateNotSet($name, $state, $record)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnFormattedStateNotSet($name, $state, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnHasExtraAttributes()
         * @param string $name
         * @param array $attributes
         * @param mixed $record
         * @static
         */
        public static function assertTableColumnHasExtraAttributes($name, $attributes, $record)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnHasExtraAttributes($name, $attributes, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnDoesNotHaveExtraAttributes()
         * @param string $name
         * @param array $attributes
         * @param mixed $record
         * @static
         */
        public static function assertTableColumnDoesNotHaveExtraAttributes($name, $attributes, $record)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnDoesNotHaveExtraAttributes($name, $attributes, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnHasDescription()
         * @param string $name
         * @param mixed $description
         * @param mixed $record
         * @param string $position
         * @static
         */
        public static function assertTableColumnHasDescription($name, $description, $record, $position = 'below')
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnHasDescription($name, $description, $record, $position);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnDoesNotHaveDescription()
         * @param string $name
         * @param mixed $description
         * @param mixed $record
         * @param string $position
         * @static
         */
        public static function assertTableColumnDoesNotHaveDescription($name, $description, $record, $position = 'below')
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnDoesNotHaveDescription($name, $description, $record, $position);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableSelectColumnHasOptions()
         * @param string $name
         * @param array $options
         * @param mixed $record
         * @static
         */
        public static function assertTableSelectColumnHasOptions($name, $options, $record)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableSelectColumnHasOptions($name, $options, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableSelectColumnDoesNotHaveOptions()
         * @param string $name
         * @param array $options
         * @param mixed $record
         * @static
         */
        public static function assertTableSelectColumnDoesNotHaveOptions($name, $options, $record)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableSelectColumnDoesNotHaveOptions($name, $options, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::callTableColumnAction()
         * @param string $name
         * @param mixed $record
         * @return static
         * @static
         */
        public static function callTableColumnAction($name, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::callTableColumnAction($name, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::sortTable()
         * @param string|null $name
         * @param string|null $direction
         * @return static
         * @static
         */
        public static function sortTable($name = null, $direction = null)
        {
            return \Livewire\Features\SupportTesting\Testable::sortTable($name, $direction);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::searchTable()
         * @param string|null $search
         * @return static
         * @static
         */
        public static function searchTable($search = null)
        {
            return \Livewire\Features\SupportTesting\Testable::searchTable($search);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::searchTableColumns()
         * @param array $searches
         * @return static
         * @static
         */
        public static function searchTableColumns($searches)
        {
            return \Livewire\Features\SupportTesting\Testable::searchTableColumns($searches);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::toggleAllTableColumns()
         * @param bool $condition
         * @return static
         * @static
         */
        public static function toggleAllTableColumns($condition = true)
        {
            return \Livewire\Features\SupportTesting\Testable::toggleAllTableColumns($condition);
        }

        /**
         * @see \Filament\Tables\Testing\TestsFilters::filterTable()
         * @param string $name
         * @param mixed $data
         * @return static
         * @static
         */
        public static function filterTable($name, $data = null)
        {
            return \Livewire\Features\SupportTesting\Testable::filterTable($name, $data);
        }

        /**
         * @see \Filament\Tables\Testing\TestsFilters::resetTableFilters()
         * @return static
         * @static
         */
        public static function resetTableFilters()
        {
            return \Livewire\Features\SupportTesting\Testable::resetTableFilters();
        }

        /**
         * @see \Filament\Tables\Testing\TestsFilters::removeTableFilter()
         * @param string $filter
         * @param string|null $field
         * @return static
         * @static
         */
        public static function removeTableFilter($filter, $field = null)
        {
            return \Livewire\Features\SupportTesting\Testable::removeTableFilter($filter, $field);
        }

        /**
         * @see \Filament\Tables\Testing\TestsFilters::removeTableFilters()
         * @return static
         * @static
         */
        public static function removeTableFilters()
        {
            return \Livewire\Features\SupportTesting\Testable::removeTableFilters();
        }

        /**
         * @see \Filament\Tables\Testing\TestsFilters::assertTableFilterExists()
         * @param string $name
         * @param \Closure|null $checkFilterUsing
         * @return static
         * @static
         */
        public static function assertTableFilterExists($name, $checkFilterUsing = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableFilterExists($name, $checkFilterUsing);
        }

        /**
         * @see \Filament\Tables\Testing\TestsFilters::assertTableFilterVisible()
         * @param string $name
         * @return static
         * @static
         */
        public static function assertTableFilterVisible($name)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableFilterVisible($name);
        }

        /**
         * @see \Filament\Tables\Testing\TestsFilters::assertTableFilterHidden()
         * @param string $name
         * @return static
         * @static
         */
        public static function assertTableFilterHidden($name)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableFilterHidden($name);
        }

        /**
         * @see \Filament\Tables\Testing\TestsRecords::assertCanSeeTableRecords()
         * @param \Illuminate\Support\Collection|array $records
         * @param bool $inOrder
         * @return static
         * @static
         */
        public static function assertCanSeeTableRecords($records, $inOrder = false)
        {
            return \Livewire\Features\SupportTesting\Testable::assertCanSeeTableRecords($records, $inOrder);
        }

        /**
         * @see \Filament\Tables\Testing\TestsRecords::assertCanNotSeeTableRecords()
         * @param \Illuminate\Support\Collection|array $records
         * @return static
         * @static
         */
        public static function assertCanNotSeeTableRecords($records)
        {
            return \Livewire\Features\SupportTesting\Testable::assertCanNotSeeTableRecords($records);
        }

        /**
         * @see \Filament\Tables\Testing\TestsRecords::assertCountTableRecords()
         * @param int $count
         * @return static
         * @static
         */
        public static function assertCountTableRecords($count)
        {
            return \Livewire\Features\SupportTesting\Testable::assertCountTableRecords($count);
        }

        /**
         * @see \Filament\Tables\Testing\TestsRecords::loadTable()
         * @return static
         * @static
         */
        public static function loadTable()
        {
            return \Livewire\Features\SupportTesting\Testable::loadTable();
        }

        /**
         * @see \Filament\Tables\Testing\TestsSummaries::assertTableColumnSummarySet()
         * @param string $columnName
         * @param string $summarizerId
         * @param mixed $state
         * @param bool $isCurrentPaginationPageOnly
         * @return static
         * @static
         */
        public static function assertTableColumnSummarySet($columnName, $summarizerId, $state, $isCurrentPaginationPageOnly = false)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnSummarySet($columnName, $summarizerId, $state, $isCurrentPaginationPageOnly);
        }

        /**
         * @see \Filament\Tables\Testing\TestsSummaries::assertTableColumnSummaryNotSet()
         * @param string $columnName
         * @param string $summarizerId
         * @param mixed $state
         * @param bool $isCurrentPaginationPageOnly
         * @return static
         * @static
         */
        public static function assertTableColumnSummaryNotSet($columnName, $summarizerId, $state, $isCurrentPaginationPageOnly = false)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnSummaryNotSet($columnName, $summarizerId, $state, $isCurrentPaginationPageOnly);
        }

        /**
         * @see \Filament\Tables\Testing\TestsSummaries::assertTableColumnSummarizerExists()
         * @param string $columnName
         * @param string $summarizerId
         * @return static
         * @static
         */
        public static function assertTableColumnSummarizerExists($columnName, $summarizerId)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnSummarizerExists($columnName, $summarizerId);
        }

            }
    }

namespace Illuminate\View {
    /**
     */
    class ComponentAttributeBag {
        /**
         * @see \Filament\Support\SupportServiceProvider::packageBooted()
         * @param \Filament\Support\View\Components\Contracts\HasColor|string $component
         * @param array|string|null $color
         * @return \Illuminate\View\ComponentAttributeBag
         * @static
         */
        public static function color($component, $color)
        {
            return \Illuminate\View\ComponentAttributeBag::color($component, $color);
        }

        /**
         * @see \Filament\Support\SupportServiceProvider::packageBooted()
         * @param array|int|null $columns
         * @param \Filament\Support\Enums\GridDirection $direction
         * @return \Illuminate\View\ComponentAttributeBag
         * @static
         */
        public static function grid($columns = [], $direction = \Filament\Support\Enums\GridDirection::Row)
        {
            return \Illuminate\View\ComponentAttributeBag::grid($columns, $direction);
        }

        /**
         * @see \Filament\Support\SupportServiceProvider::packageBooted()
         * @param array|string|int|null $span
         * @param array|int|null $start
         * @param array|string|int|null $order
         * @param bool $isHidden
         * @return \Illuminate\View\ComponentAttributeBag
         * @static
         */
        public static function gridColumn($span = [], $start = [], $order = [], $isHidden = false)
        {
            return \Illuminate\View\ComponentAttributeBag::gridColumn($span, $start, $order, $isHidden);
        }

        /**
         * @see \Flux\FluxServiceProvider::bootMacros()
         * @param mixed $key
         * @param mixed $default
         * @static
         */
        public static function pluck($key, $default = null)
        {
            return \Illuminate\View\ComponentAttributeBag::pluck($key, $default);
        }

        /**
         * @see \Livewire\Features\SupportBladeAttributes\SupportBladeAttributes::provide()
         * @param mixed $name
         * @static
         */
        public static function wire($name)
        {
            return \Illuminate\View\ComponentAttributeBag::wire($name);
        }

            }
    /**
     */
    class Factory {
        /**
         * @see \Flux\FluxServiceProvider::bootMacros()
         * @static
         */
        public static function getCurrentComponentData()
        {
            return \Illuminate\View\Factory::getCurrentComponentData();
        }

            }
    /**
     */
    class View {
        /**
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $data
         * @static
         */
        public static function layoutData($data = [])
        {
            return \Illuminate\View\View::layoutData($data);
        }

        /**
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $section
         * @static
         */
        public static function section($section)
        {
            return \Illuminate\View\View::section($section);
        }

        /**
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $title
         * @static
         */
        public static function title($title)
        {
            return \Illuminate\View\View::title($title);
        }

        /**
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $slot
         * @static
         */
        public static function slot($slot)
        {
            return \Illuminate\View\View::slot($slot);
        }

        /**
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $view
         * @param mixed $params
         * @static
         */
        public static function extends($view, $params = [])
        {
            return \Illuminate\View\View::extends($view, $params);
        }

        /**
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $view
         * @param mixed $params
         * @static
         */
        public static function layout($view, $params = [])
        {
            return \Illuminate\View\View::layout($view, $params);
        }

        /**
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param callable $callback
         * @static
         */
        public static function response($callback)
        {
            return \Illuminate\View\View::response($callback);
        }

            }
    }

namespace Illuminate\Testing {
    /**
     * @template TResponse of \Symfony\Component\HttpFoundation\Response
     * @mixin \Illuminate\Http\Response
     */
    class TestResponse {
        /**
         * @see \Livewire\Volt\VoltServiceProvider::registerTestingMacros()
         * @param mixed $component
         * @static
         */
        public static function assertSeeVolt($component)
        {
            return \Illuminate\Testing\TestResponse::assertSeeVolt($component);
        }

        /**
         * @see \Livewire\Volt\VoltServiceProvider::registerTestingMacros()
         * @param mixed $component
         * @static
         */
        public static function assertDontSeeVolt($component)
        {
            return \Illuminate\Testing\TestResponse::assertDontSeeVolt($component);
        }

            }
    }

namespace App\Livewire\Settings {
    /**
     */
    class Profile extends \Livewire\Component {
            }
    /**
     */
    class Password extends \Livewire\Component {
            }
    /**
     */
    class Appearance extends \Livewire\Component {
            }
    }

namespace App\Livewire\Auth {
    /**
     */
    class Login extends \Livewire\Component {
            }
    /**
     */
    class Register extends \Livewire\Component {
            }
    /**
     */
    class ForgotPassword extends \Livewire\Component {
            }
    /**
     */
    class ResetPassword extends \Livewire\Component {
            }
    /**
     */
    class VerifyEmail extends \Livewire\Component {
            }
    }


namespace  {
    class CardHelper extends \App\Facades\CardHelper {}
    class EloquentSerialize extends \AnourValar\EloquentSerialize\Facades\EloquentSerializeFacade {}
    class Flux extends \Flux\Flux {}
    class Livewire extends \Livewire\Livewire {}
}





