<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function service()
    {
        return view('service');
    }
    public function idea()
    {
        return view('idea');
    }
    public function customer()
    {
        return view('customer');
    }
    public function contact()
    {
        return view('contact');
    }
    public function privacy()
    {
        return view('privacy');
    }
    public function refund()
    {
        return view('refund');
    }
    public function rider()
    {
        return view('rider');
    }
    public function shoptc()
    {
        return view('shoptc');
    }
    public function termsrider()
    {
        return view('termsrider');
    }
    public function user_terms()
    {
        return view('user_terms');
    }
   
}
