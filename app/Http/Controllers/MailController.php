<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Redirect;
use Session;
use App\Http\Requests\ContactRequest;
use Validator;

class MailController extends Controller
{
    public function sendmail(Request $request)
    {

//  dd($request->input());

      Mail::to("contacto@qu2000.cl")->send(new ContactMail($request->input()));

      


      if (Mail::failures()) {

      return response('fallo',500);
      }
      else {

        return response('Se a enviado tus datos con exito',200);
      }


    }

}
