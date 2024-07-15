<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactUs;

class ContactController extends Controller
{
    public function create()
    {
        return view('layouts.navigation');
    }

    public function send(Request $request)
    {
        $data = [
            'fname'    => $request->name,
            'lname'   => $request->lname,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'details' => $request->details
        ];
        Mail::to('admin@gmail.com')->send(new ContactUs($data));
        return redirect()->back();
    }
}
