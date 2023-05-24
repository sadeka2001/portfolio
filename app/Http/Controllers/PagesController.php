<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\main;
use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
   public function index(){
    $main=main::first();
    $services=service::all();
    $abouts=About::first();
    return view('pages.index',compact('main','services','abouts'));
   }

   public function admin(){
    return view('Backend.dashboard');
   }

public function detail(){
    return view('pages.portfolio_details');
}
}
