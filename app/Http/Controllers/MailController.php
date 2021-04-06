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
        Session::flash('mail.error', true);
        return redirect()->route('contacto');

      }
      else {

        Session::flash('mail.success', true);
        return redirect()->route('contacto');
      }


    }

}
