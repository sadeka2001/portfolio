<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactFromMail;


class ContactFromController extends Controller
{
    public function html_email(Request $request){

     Mail::to('sadeka200120@gmail.com')->send(new ContactFromMail($request));
     return 'message sent successfully';
    }
}
