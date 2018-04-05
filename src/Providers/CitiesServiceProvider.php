<?php

namespace TanerInCode\Cities\Providers;

use Illuminate\Support\ServiceProvider;

class CitiesServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__."/../Routes/web.php";

        $this->registerConfig();
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        $this->app->register('Maatwebsite\Excel\ExcelServiceProvider');
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Excel', 'Maatwebsite\Excel\Facades\Excel');

        $this->commands('command.cities');
        $this->app->singleton('command.cities', function ($app) {
            return new \TanerInCode\Cities\Console\CitiesCommand();
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function registerConfig()
    {
    }
}
