<?php

namespace App\Http\Controllers;

use App\Models\main;
use App\Models\About;
use App\Models\Skills;
use App\Models\service;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
   public function index(){
    $main=main::first();
    $services=service::all();
    $abouts=About::first();
    $skills=Skills::all();
    return view('pages.index',compact('main','services','abouts','skills'));
   }

   public function admin(){
    return view('Backend.dashboard');
   }

public function detail(){
    $main=main::first();
    $services=service::all();
    $abouts=About::first();
    $portfolio=Portfolio::first();
    $skills=Skills::all();
    return view('pages.portfolio_details',compact('main','services','abouts','portfolio','skills'));
}
}
