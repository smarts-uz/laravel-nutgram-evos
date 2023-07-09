<?php

namespace App\Providers;

use App\Interface\MenuInterface;
use App\Telegram\Commands\Startsection;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MenuInterface::class, Startsection::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
