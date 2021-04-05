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

      Mail::to("contacto@qu2000.cl")->send(new ContactMailCotizador($request->input()));


      if (Mail::failures()) {
        Session::flash('mail.error', true);
        return redirect()->route('cotizador');

      }
      else {

        Session::flash('mail.success', true);
        return redirect()->route('cotizador');
      }


    }

}
