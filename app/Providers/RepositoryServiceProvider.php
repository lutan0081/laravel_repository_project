<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\Backend\HomeRepositoryInterface;
use App\Repositories\Backend\HomeRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    // 紐づけさせる
    public function register()
    {
        $this->app->bind(HomeRepositoryInterface::class, HomeRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
