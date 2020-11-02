<?php

namespace App\Providers;

use App\Http\View\Composers\WishComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class NavigationServiceProvider extends ServiceProvider
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
        View::composer('wish.show', WishComposer::class);
    }
}
