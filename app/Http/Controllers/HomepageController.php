<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage()
    {
        $faqs =Faq::all();
        return view('homepage',compact('faqs'));
    }
}
