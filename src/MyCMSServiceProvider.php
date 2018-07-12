<?php

namespace Miri92\Mycms;

use Illuminate\Support\ServiceProvider;

class MyCMSServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        require __DIR__ . '/routes/routes.php';

        $this->loadViewsFrom(__DIR__ . '/./../resources/views', 'mycms');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->registerPublishables();
    }

    public function registerPublishables()
    {
        $basePath = dirname(__DIR__);

        $arrPublishable = [
            'public' => [
                "$basePath/publishable/public" => public_path('/'),
            ],
            'config' => [
                "$basePath/publishable/config/mycms.php" => config_path('mycms.php'),
            ],
            'migration' => [
                "$basePath/publishable/database/migrations" => database_path('migrations'),
            ],
            'seeds' => [
                "$basePath/publishable/database/seeds" => database_path('seeds'),
            ]

        ];

        foreach ($arrPublishable as $group => $paths) {
            $this->publishes($paths, $group);
        }

    }
}
