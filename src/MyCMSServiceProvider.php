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

        $this->loadViewsFrom(__DIR__.'/./../resources/views', 'mycms');
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
          ]
        ];

        foreach ($arrPublishable as $group => $paths) {
            $this->publishes($paths, $group);
        }

    }
}
