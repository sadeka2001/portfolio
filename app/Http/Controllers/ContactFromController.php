<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFromMail;
class ContactFromController extends Controller
{
    public function store(Request $request){

     Mail::to('sadeka200120@gmail.com')->send(new ContactFromMail($request));
     return redirect('/contact.store')->with('message sent successfully');
    }
}
