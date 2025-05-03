<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings.
     *
     * @var array
     */
    protected $listen = [
        // Example:
        // 'App\Events\EventName' => [
        //     'App\Listeners\EventListener',
        // ],
    ];
}
