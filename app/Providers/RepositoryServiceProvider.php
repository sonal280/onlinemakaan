<?php

namespace App\Providers;

use App\Repositories\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\PropertyRepositoryInterface;
use App\Repositories\PropertyRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class); 
        $this->app->bind(PropertyRepositoryInterface::class, PropertyRepository::class); 
        $this->app->bind(MailRepositoryInterface::class, MailRepository::class); 
    }
}
