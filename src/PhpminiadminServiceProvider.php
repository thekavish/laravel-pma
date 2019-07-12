<?php

namespace Thekavish\Phpminiadmin;

use Illuminate\Support\ServiceProvider;

class PhpminiadminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Thekavish\Phpminiadmin\PhpminiadminController');
    }
}
