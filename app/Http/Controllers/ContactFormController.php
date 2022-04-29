<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactFormController extends Controller
{
    public function create(){
        return view("contact.create");
    }

    public function store(Request $request){
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // send an email
        Mail::to($data['email'])->send(new ContactFormMail($data));

        return redirect()->route('contact.create');
    }
}
