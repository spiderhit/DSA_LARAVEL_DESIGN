<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){

        return view('frontend.pages.home');
    }


    public function doctor_list(){

        return view('frontend.pages.doctor_list');
    }


    public function doctor_view(){

        return view('frontend.pages.doctor_view');
    }

    public function dashboard(){

        return view('frontend.pages.dashboard');
    }
}
