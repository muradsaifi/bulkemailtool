<?php

namespace Muradsaifi\Bulkemailtool;

use Illuminate\Support\ServiceProvider;

class BulkemailServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'bulkemailtool');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([
            __DIR__.'/config/bulk_email.php' => config_path('bulk_email.php'),
        ]);

    }
}
