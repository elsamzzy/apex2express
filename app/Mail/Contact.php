<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $phone;
    public $email;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->name = $request['name'];
        $this->phone = $request['phone'];
        $this->email = $request['email'];
        $this->message = $request['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = $this->name;
        return $this->markdown('mail.contact')
            ->subject($name . ' Sent you a message');
    }
}
