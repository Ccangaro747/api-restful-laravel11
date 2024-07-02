<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\StudentRepositoryInterface;
use App\Repositories\StudentRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(StudentRepositoryInterface::class, StudentRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
