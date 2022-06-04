<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewDealer extends Mailable
{
    use Queueable, SerializesModels;
    public $info;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->info = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = $this->info['subject'];
        $name = $this->info['name'];
        $phone = $this->info['phone'];
        $city = $this->info['city'];
        $email= $this->info['email'];
        $body = $this->info['body'];

        return $this->subject($subject)
                    ->view('mails.notificationDealerNew',$this->info)
                    ->with([
                        'subject' => $subject,
                        'name' => $name,
                        'phone' => $phone,
                        'city' => $city,
                        'email' => $email,
                        'body' => $body
                    ]);
    }
}
