<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('char', function ($attribute, $value, $parameters, $validator){
            return preg_match('/^[a-zA-Z]+$/', $value);
        });

        Validator::replacer('char', function ($message, $attribute, $rule, $parameters){
            return str_replace(':attribute', $attribute, ':attribute hanya boleh berisi huruf.');
        });
    }
}
