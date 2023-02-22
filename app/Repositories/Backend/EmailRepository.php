<?php

namespace App\Repositories\Backend;

use App\Interfaces\Backend\EmailRepositoryInterface;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\Backend\EmailRequest;
use Illuminate\Support\Facades\Mail;
// ★Mailableの追加★
use App\Mail\TestMail;

class EmailRepository implements EmailRepositoryInterface
{
    /**
     * email送信
     */
    public function sendEmail(EmailRequest $request){
        Log::debug('log_start:'.__FUNCTION__);
        
        // validate通過後、配列にしてくれる
        $form_data = $request->validated();

        // 
        $email_admin = 'lutan0081.h@gmail.com';

        // 管理者宛メール
        Mail::to($email_admin)->send(new TestMail($form_data));
    }
}