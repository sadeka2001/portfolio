<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function create(){
        return view('contact.create');
    }

    public function index(){
        $contact=Contact::all();
        return view('contact.index',compact('contact'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|string',
            'subject'=>'required|string',
            'message'=>'required|string',

        ]);

        $contact =new contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect('/contact.create')->with('success', 'Contact created successfully');
    }


    // public function html_email(Request $request)
    // {
    //     // $student = new student;
    //     // $student->name = $request->name;
    //     // $student->roll = $request->roll;
    //     // $student->save();

    //     $data = array('name' => $request->name, 'email' => $request->email, 'sub' => $request->subject, 'message' => $request->message); // user er name & email, message

    //     Mail::send('mail', $data, function ($message) {
    //         $message->to('sadeka200120@gmail.com')->subject('Mail from Portfolio');
    //         $message->from('sadeka114922@gmail.com'); // settings er email
    //     });
    //     echo "Your Email Sent!";
    // }
    // public function edit($id){
    //     $contact=contact::find($id);
    //     return view('contact.edit',compact('contact'));
    // }

    // public function update(request $request, $id){
    //     $this->validate($request, [
    //         'name' => 'required|string',
    //         'email' => 'required|string',
    //         'subject'=>'required|string',
    //         'message'=>'required|string',

    //     ]);

    //     $contact =contact::find($id);
    //     $contact ->name = $request->name;
    //     $contact ->email = $request->email;
    //     $contact->subject= $request->subject;
    //     $contact->message= $request->message;

    //     $contact->save();
    //     return redirect('/contact.index')->with('success', ' services updated successfully');
    // }
    // public function delete($id){
    //     $contact=contact::find($id);
    //     $contact->delete();
    //     return redirect('/contact.index')->with('success', 'Contact deleted successfully');
    // }


}
