<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMailCotizador extends Mailable
{
    use Queueable, SerializesModels;

    public $datacotizador;

     /**
      * Create a new message instance.
      *
      * @return void
      */
     public function __construct($infoCotizador)
     {
         $this->datacotizador=$infoCotizador;
     }

     /**
      * Build the message.
      *
      * @return $this
      */
     public function build()
     {
         
        return $this->view('mailmayorista.contactcotizador')->subject('Correo de un nuevo Cotiazador');


     }
}
