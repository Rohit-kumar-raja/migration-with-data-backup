<?php

namespace Rohitkumarraja\Migrationwithdatabackup;

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
                \Rohitkumarraja\Migrationwithdatabackup\Command\MigrationWtihBackupData::class,
            ]);
        }
    }
}
