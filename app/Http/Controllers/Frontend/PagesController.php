<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\mail;

class PagesController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function products(){
        return view('frontend.product');
    }


    public function why(){
        return view('frontend.why');
    }

    public function about(){
        return view('frontend.about');
    }

    public function testimonial(){
        return view('frontend.testimonial');
    }
}