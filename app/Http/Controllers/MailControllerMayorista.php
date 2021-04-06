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

      Mail::to("contacto@qu2000.cl")->send(new ContactMailMayorista($request->input()));


      if (Mail::failures()) {
        Session::flash('mail.error', true);
        return redirect()->route('mayoristas');

      }
      else {

        Session::flash('mail.success', true);
        return redirect()->route('mayoristas');
      }


    }

}
