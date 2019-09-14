<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
     return view('send_email');
    }

    function send()
    {
    //  $this->validate($request, [
    //   'name'     =>  'required',
    //   'email'  =>  'required|email',
    //   'message' =>  'required'
    //  ]);

        $data = array(
            'name'      =>  "Dié",
            'prenom'   =>   "Micael"
        );

     Mail::to('micaeldie@gmail.com')->send(new SendMail($data));
     return ('Thanks for contacting us!');

    }
}
