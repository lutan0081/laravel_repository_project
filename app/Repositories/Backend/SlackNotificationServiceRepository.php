<?php

namespace App\Repositories\Backend;

use Illuminate\Notifications\Notifiable;
use App\Notifications\SlackNotification;
use App\Interfaces\Backend\SlackNotificationServiceInterface;

class SlackNotificationServiceRepository implements SlackNotificationServiceInterface
{
    use Notifiable;

    public function send($message)
    {
        $this->notify(new SlackNotification($message));
    }

    // slackのurlを取得
    protected function routeNotificationForSlack()
    {
        return config('slack.webhook_url');
    }

    /**
     * Get the value of the notifiable's primary key.
     * ※後述するテストで必要（ないとエラーになる）
     *
     * @return mixed
     */
    public function getKey()
    {
        //
    }
}