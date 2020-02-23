<?php

namespace App\Providers;

use App\Services\BlockService;
use App\Services\BlockServiceInterface;
use App\Services\Notification\ContactAlertService;
use App\Services\Notification\ContactAlertServiceInterface;
use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BlockServiceInterface::class, BlockService::class);
        $this->app->bind(ContactAlertServiceInterface::class, ContactAlertService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
