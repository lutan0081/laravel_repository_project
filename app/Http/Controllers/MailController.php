<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\TestMail;
use App\Http\Requests\Backend\EmailRequest;
use App\Interfaces\Backend\EmailRepositoryInterface;

class MailController extends Controller
{
    private EmailRepositoryInterface $emailRepository;

    // コンストラクタ
    public function __construct(EmailRepositoryInterface $emailRepositoryInterface) 
    {
        Log::debug('start:' .__FUNCTION__);
        $this->emailRepository = $emailRepositoryInterface;
    }

    // 初期表示
    public function show()
    {
        Log::debug('start:' .__FUNCTION__);

        return view('backend.mail');
    }

    // 初期表示
    public function emailSend(EmailRequest $request)
    {
        Log::debug('start:' .__FUNCTION__);

        $this->emailRepository->sendEmail($request);

        dd('送信完了');

        return view('welcome');
    }
}
