<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function home( Request $request)
    {
        return view('contact');
    }
    public function getdata(Request $request)
    {
        $email = $request->get('email');
        Mail::to($email)->send(new ContactMail());
    }
}
