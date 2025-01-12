<?php

namespace App\Providers;

use App\Http\Middleware\CorsMiddleware;

use Illuminate\Support\Facades\Route;

class FilamentServiceProvider extends FilamentServiceProvider
{
    public function boot()
    {
       
        \Filament\Facades\Filament::serving(function () {
           
            Route::middleware(['cors'])->group(function () {
              
            });
        });
    }
}
