<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\Backend\HomeRepositoryInterface;
use App\Repositories\Backend\HomeRepository;
use App\Interfaces\Backend\SlackNotificationServiceInterface;
use App\Repositories\Backend\SlackNotificationServiceRepository;
use App\Interfaces\Backend\EmailRepositoryInterface;
use App\Repositories\Backend\EmailRepository;

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
        // Home
        $this->app->bind(HomeRepositoryInterface::class, HomeRepository::class);
        // Slack
        $this->app->bind(SlackNotificationServiceInterface::class, SlackNotificationServiceRepository::class);
        // email_admin
        $this->app->bind(EmailRepositoryInterface::class, EmailRepository::class);
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
