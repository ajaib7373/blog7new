<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  
    public function create() {
    return view('contact.create');
}

public function store() {

$data = request()->validate([
'name' => 'required|string',
'email' => 'required|email',
'message' => 'required'


]);
    
  Mail::send(new ContactFormMail($data['name'], $data['email'], $data['message']));

  return redirect('/contact')->with('success', 'Thank you for your Message! We will get back to you soon!');;
  
//   back()->with('success', 'T We will get back to you soon!');
}

}
