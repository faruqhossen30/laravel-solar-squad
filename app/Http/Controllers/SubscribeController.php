<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubscribeController extends Controller
{
    public function subscribed(Request $request)
    {
        $request->validate([
            'email'=>['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Subscribe::class],
        ]);
        Subscribe::create(['email' => $request->email]);
        Session::flash('success');
        return redirect()->back()->with('success','Thank you for Subscribed.');
    }
}
