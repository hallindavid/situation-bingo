<?php

namespace App\Providers;

use App\Helpers\SituationHelper;
use App\Helpers\CardHelper;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
     public function register(): void
        {
            $this->app->bind('cardHelper', function ($app) {
                return new CardHelper();
            });

            $this->app->bind('situationHelper', function ($app) {
                return new SituationHelper();
            });
        }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
