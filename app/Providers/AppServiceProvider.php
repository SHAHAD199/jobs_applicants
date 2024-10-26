<?php

namespace App\Providers;

use App\Repositries\ApplicantRepo\{ApplicantImplemention, ApplicantInterface};
use App\Repositries\AuthRepo\{AuthImplemintion, AuthInterface};
use App\Repositries\UserRepo\{UserImplemintion, UserInterface};
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserInterface::class, UserImplemintion::class);
        $this->app->bind(AuthInterface::class, AuthImplemintion::class);
        $this->app->bind(ApplicantInterface::class, ApplicantImplemention::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
