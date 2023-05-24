<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function create(){
        return view('Backend.Services.create');
    }

    public function index(){
        $services=service::all();
        return view('Backend.Services.list',compact('services'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'icon' => 'required|string',
            'tittle' => 'required|string',
            'description'=>'required|string',

        ]);

        $services =new service;
        $services->icon = $request->icon;
        $services->tittle = $request->tittle;
        $services->description = $request->description;

        $services->save();
        return redirect('/services.create')->with('success', ' services created successfully');
    }

    public function edit($id){
        $services=service::find($id);
        return view('Backend.Services.edit',compact('services'));
    }

    public function update(request $request, $id){
        $this->validate($request, [
            'icon' => 'required|string',
            'tittle' => 'required|string',
            'description'=>'required|string',

        ]);

        $services =service::find($id);
        $services->icon = $request->icon;
        $services->tittle = $request->tittle;
        $services->description = $request->description;

        $services->save();
        return redirect('/services.index')->with('success', ' services updated successfully');
    }
    public function delete($id){
        $services=service::find($id);
        $services->delete();
        return redirect('/services.index')->with('success', ' services deleted successfully');
    }


}
