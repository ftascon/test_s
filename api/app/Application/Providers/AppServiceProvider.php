<?php

namespace App\Application\Providers;

use App\Domain\Repositories\ExampleRepository;
use App\Infrastructure\Persistence\Eloquent\EloquentExampleRepository;
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
    }
}
