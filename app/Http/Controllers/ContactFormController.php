<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;

class ContactFormController extends Controller
{
    public function sendContactFormMessage(ContactFormRequest $request)
    {
        \Mail::to(env('TO_EMAIL'))->send(new \App\Mail\ContactForm($request));

        \Session::flash('flash_message', 'お問い合わせを受け付けました。');

        return redirect()->route('home');
    }
}
