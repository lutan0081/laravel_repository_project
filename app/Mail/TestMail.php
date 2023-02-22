<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;

    /**
     * Create a new message instance.
     * 配列の方で受取
     * @return void
     */
    public function __construct(public array $form_data)
    {
    }

    /**
     * 件名の定義を取得
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        $from = new Address($this->form_data['email'], $this->form_data['name']);
        $subject = 'お問合せがありました';
    
        return new Envelope(
          from: $from,
          subject: $subject,
        );
    }

    /**
     * メッセージ内容の定義を取得
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            text: 'emails.mail', // プレーンテキストで送信
        );
    }

    /**
     * メールに添付ファイルを追加
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
