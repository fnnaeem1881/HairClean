<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $item;
    public $time;

    public function __construct($item, $time)
    {
        $this->item = $item;
        $this->time = $time;
    }

    public function build()
    {
        return $this->subject('Payment Confirmation')
                    ->view('emails.payment_confirmation');
    }
}
