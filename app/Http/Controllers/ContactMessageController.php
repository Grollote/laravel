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
        return view ('contact');
    }

public function store(Request $request)
{
    $this->validate($request , [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
    ]);

    Mail::send('emails.contact-message', [
        'msg' => $request->message
    ],
        function ($mail) use ($request){
            $mail->from($request->email, $request->name);
            $mail->to('admin@example.com')->subject('Contact Message');
        });
<<<<<<< HEAD
=======
        
>>>>>>> af6655e1e26078ad8a610df0597eb9779422556c
        return redirect()->back()->with('flash_message', 'Merci pour votre message');
    }
}