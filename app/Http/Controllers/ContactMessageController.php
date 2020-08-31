<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactMessageController extends Controller
{
    public function create()
    {
        return view ('welcome');
    }

public function store(Request $request)
{
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    Mail::send('emails.contact-message',[
        'msg' => $request->message, 
    ],
        function ($mail) use ($request){
            $mail->from($request->email, $request->name);
            $mail->to('grolleau.annelise@gmail.com')->subject('Contact Message');
        });
        return redirect()->back()->with('flash_message', 'Merci pour votre message');
    }
}