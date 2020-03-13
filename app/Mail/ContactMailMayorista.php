<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMailMayorista extends Mailable
{
    use Queueable, SerializesModels;

    public $datamayorista;

     /**
      * Create a new message instance.
      *
      * @return void
      */
     public function __construct($infoMayorista)
     {
         $this->datamayorista=$infoMayorista;
     }

     /**
      * Build the message.
      *
      * @return $this
      */
     public function build()
     {


        return $this->view('mailmayorista.contactmayorista')->subject('Correo de un nuevo Contacto');


     }
}
