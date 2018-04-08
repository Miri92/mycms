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
    }
}
