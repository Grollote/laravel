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
<<<<<<< HEAD
    $this->validate($request, [
=======
    $this->validate($request , [
>>>>>>> 1efaa25ff81152fd4c54b5ded1ef9894c2e74326
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
        return redirect()->back()->with('flash_message', 'Merci pour votre message');
    }
}