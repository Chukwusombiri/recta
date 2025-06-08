<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
        Blade::if('admin', function () {
            return auth('admin')->check();
        });

        $appFullName = config('app.name');
        $appShortName = substr($appFullName, 0, strpos($appFullName, " "));
        View::share([
            'appName' => $appShortName,
            'ogDescription' => $appFullName . ' – Empowering your financial journey with expert insights and personalized strategies to grow your wealth confidently.',
            'ogTitle' => 'A trusted investment partner offering diverse opportunities to support you at every stage—from first-time investors to seasoned professionals.',
            'metaDescription' => $appShortName . ' delivers smart, accessible investment solutions for all levels—whether you’re exploring markets for the first time or fine-tuning a seasoned portfolio.',
        ]);

        Schema::defaultStringLength(191);
    }
}
