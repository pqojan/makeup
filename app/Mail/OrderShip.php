<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShip extends Mailable
{
    use Queueable, SerializesModels;

    public $zakaz;
    public $mail;
    public $name;
    public $phone;
    public $order_date;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($zakaz, $mail, $name, $phone, $order_date)
    {
        $this->zakaz = $zakaz;
        $this->mail = $mail;
        $this->name = $name;
        $this->phone = $phone;
        $this->order_date = $order_date;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mailSend');
    }
}
