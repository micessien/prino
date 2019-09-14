<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ContactMessageController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
            'commentaire' => 'required',
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'commentaire' => $request->commentaire,
        );

        Mail::to('micaeldie@gmail.com')->send(new SendMail($data));
        return back();

        // Mail::send('emails.contact-message', [
        //     'msg' => $request->commentaire
        // ], function($mail) use($request) {
        //     $mail->from($request->email, $request->name);

        //     $mail->to('john@example.com')->subject('Contact Message');
        // });
        // // dd($request->all());

        // return redirect()->back()->with('flash_message', 'Thanks you for your message');
    }
}
