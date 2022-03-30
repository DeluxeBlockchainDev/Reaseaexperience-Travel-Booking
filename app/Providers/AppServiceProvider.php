<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        $copyright = \App\Models\FrontEndSetting::firstOrCreate(['key' => 'copyright'],
            ['value' => '&copy; Copyright Nguyen 2021. All Right Reserved By <span class="la la-heart"></span> by <a href="https://redseaexperience.com">Red Sea Experience</a>'])['value'];
        $email = \App\Models\FrontEndSetting::firstOrCreate(['key' => 'email'],
            ['value' => 'nguyenbiz@gmail.com'])['value'];
        $address = \App\Models\FrontEndSetting::firstOrCreate(['key' => 'address'],
            ['value' => 'Melbourne, Australia, 105 South Park Avenue'])['value'];
        $phone = \App\Models\FrontEndSetting::firstOrCreate(['key' => 'phone'],
            ['value' => '(123)2800 256 508'])['value'];
        $frontEndSetting = [
            'copyright' => $copyright,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
        ];
        View::share('frontEndSetting', $frontEndSetting);
        View::share('loading', true);
    }
}
