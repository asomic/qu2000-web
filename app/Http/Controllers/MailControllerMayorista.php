<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMailMayorista;
use Redirect;
use Session;
use App\Http\Requests\ContactRequest;
use Validator;

class MailControllerMayorista extends Controller
{
    public function sendmail(Request $request)
    {

      Mail::to("trindamorales@gmail.com")->send(new ContactMailMayorista($request->input()));


      if (Mail::failures()) {

      return response('Algo salio mal !',500);
      }
      else {

        return response('Tus datos se enviaron correctamente ',200);
      }


    }

}
