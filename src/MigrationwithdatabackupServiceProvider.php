<?php

namespace Rohit\HelloPackage;

use Illuminate\Support\ServiceProvider;

class MigrationwithdatabackupServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Rohit\Migration\Command\MigrationWithBackupData::class,
            ]);
        }
    }
}
