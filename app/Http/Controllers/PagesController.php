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
    $about=About::first();
    $portfolio=Portfolio::all();
    $skills=Skills::all();
    return view('pages.index',compact('main','services','about','skills','portfolio'));
   }

   public function admin(){
    return view('Backend.dashboard');
   }

public function detail(){
    $main=main::first();
    $services=service::all();
    $about=About::first();
    $portfolio=Portfolio::all();
    $skills=Skills::all();
    return view('pages.portfolio_details',compact('main','services','about','portfolio','skills'));
}
}
