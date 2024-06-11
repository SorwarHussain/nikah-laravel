<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Mail\ContactMail; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return response()->json([
            'message' => 'Wait you shortly.'
        ]);
    }
    public function submitForm(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject'=>$request->subject,
            'message' => $request->message,
        ];
        $adminEmail="nusratjahansalina999@gmail.com";
        Mail::to($adminEmail)->send(new ContactMail($details));

        return response()->json([
            'message' => 'Thank you for contacting us. We will get back to you shortly.'
        ]);
    }

}
