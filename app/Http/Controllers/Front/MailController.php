<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

use App\Models\User;
use Mail;

class MailController extends Controller
{
    public function contactForm()
    {
        return view('front.contact');
    }

    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'messages' => 'required',
        ]);

        $input = $request->all();

        \Mail::send('front.contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'subject' => $input['subject'],
            'messages' => $input['messages'],
        ), function($message) use ($request){
            $message->from('user@gmail.com', $request->email);
            $message->to('infoegooyun@gmail.com', 'EGOOYUN')->subject($request->get('subject'));
        });

        return redirect()->back()->with(['success' => 'Mail Başarıyla Gönderildi']);
    }
}