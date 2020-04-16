<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMailCotizador;
use Redirect;
use Session;
use App\Http\Requests\ContactRequest;
use Validator;

class MailControllerCotizador extends Controller
{
    public function mail(Request $request)
    {

      Mail::to("trindamorales@gmail.com")->send(new ContactMailCotizador($request->input()));


      if (Mail::failures()) {

      return response('Error, revisar ',500);
      }
      else {

        return response('Tus productos se enviaron correctamente',200);
      }


    }

}
