<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AccountActivatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $verified;

    /**
     * Create a new message instance.
     *
     * @param $user
     * @param $verified
     */
    public function __construct($user, $verified)
    {
        $this->user = $user;
        $this->verified = $verified;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Finaliser votre inscription")
            ->view('emails.account-activated', ['user' => $this->user, 'verified' => $this->verified]);
    }
}
