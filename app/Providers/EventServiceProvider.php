<?php

namespace App\Providers;

use App\Jobs\TestJob;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{

    // protected $listen = [
    //     Registered::class => [
    //         SendEmailVerificationNotification::class,
    //     ],
    // ];

    public function boot()
    {
        \App::bindMethod(TestJob::class . '@handle', function($job){
            return $job->handle();
        });
    }

    // public function shouldDiscoverEvents()
    // {
    //     return false;
    // }
}
