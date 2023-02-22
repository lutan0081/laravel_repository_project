<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\Backend\SlackNotificationServiceInterface;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\Backend\SlackRequest;

class SlackController extends Controller
{
    private SlackNotificationServiceInterface $SlackNotificationServiceRepository;

    /**
     * @param SlackNotificationServiceInterface $slack_notification_service_interface
     */
    public function __construct(SlackNotificationServiceInterface $slack_notification_service_interface)
    {
        Log::debug('start:' .__FUNCTION__);

        $this->SlackNotificationServiceRepository = $slack_notification_service_interface;
    }

    /**
     * 表示
     */
    public function show()
    {
        Log::debug('start:' .__FUNCTION__);

        return view('backend.slack');
    }

    /**
     * Slack通知を送信する
     */
    public function sendSlackNotification(SlackRequest $request)
    {
        Log::debug('start:' .__FUNCTION__);

        // send()は、文字列で渡さなければならない為、変数に格納
        $message = $request->input('contents');

        // repository内のsend関数を実行
        $this->SlackNotificationServiceRepository->send($message);

        return view('backend.slack');
    }

}
