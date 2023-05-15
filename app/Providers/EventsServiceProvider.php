<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\EventsService;

class EventsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('eventsService', function () {
            return new EventsService();
        });
    }
}
