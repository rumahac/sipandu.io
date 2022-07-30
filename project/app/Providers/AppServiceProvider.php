<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Generalsetting;
use App\Sociallink;
use App\Seotool;
use App\Pagesetting;
use App\Language;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('*',function($settings){
            $settings->with('gs', Generalsetting::find(1));
            $settings->with('sls', Sociallink::find(1));
            $settings->with('seo', Seotool::find(1));
            $settings->with('ps', Pagesetting::find(1));
            $settings->with('lang', Language::find(1));
        });
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
