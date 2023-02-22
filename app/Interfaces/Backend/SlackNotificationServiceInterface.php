<?php

namespace App\Interfaces\Backend;

interface SlackNotificationServiceInterface
{
    public function send($message);
}