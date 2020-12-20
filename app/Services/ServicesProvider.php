<?php

namespace App\Services;

use Illuminate\Support\ServiceProvider;

class ServicesProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\Services\SendMail\ISendMail',
            'App\Services\SendMail\SendMail'
        );
    }
}