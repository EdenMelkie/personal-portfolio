<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);
    
        // Send email
        Mail::to('hailemariameyayu2012@gmail.com')->send(new ContactMessage($data));
    
        return back()->with('success', 'Thanks for your message!');
    }
}
