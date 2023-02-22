<?php

namespace App\Interfaces\Backend;

use App\Http\Requests\Backend\EmailRequest;

interface EmailRepositoryInterface 
{
    public function sendEmail(EmailRequest $request);
}