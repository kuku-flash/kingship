<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function insights(){
        return view('frontend.client.insights');
    }
    public function profile_settings(){
        return view('frontend.client.profile_settings');
    }
    public function my_ads(){
        return view('frontend.client.my_ads');
    }
    public function messages(){
        return view('frontend.client.messages');
    }
    public function payments(){
        return view('frontend.client.payments');
    }
    public function favourites(){
        return view('frontend.client.favourites');
    }
    public function privacy_settings(){
        return view('frontend.client.privacy_settings');
    }
}
