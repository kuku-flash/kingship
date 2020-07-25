<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('frontend.site.index');
    }
    public function about(){
        return view('frontend.site.about');
    }
    public function services(){
        return view('frontend.site.services');
    }
    public function pricing(){
        return view('frontend.site.pricing');
    }
    public function contact(){
        return view('frontend.site.contact');
    }
    public function blog(){
        return view('frontend.site.blog');
    }
    public function cars(){
        return view('frontend.site.cars');
    }
    public function carlist(){
        return view('frontend.cars.carlist');
    }
    public function car_detail(){
        return view('frontend.cars.car_detail');
    }

}
