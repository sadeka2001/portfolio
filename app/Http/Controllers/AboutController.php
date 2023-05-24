<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function create(){
        
        return view('Backend.About.create');
    }

    public function index(){
        $abouts=About::all();
        return view('Backend.About.list',compact('abouts'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'bd' => 'required|string',
            'website' => 'required|string',
            'phone'=>'required|string',
            'city'=>'required|string',
            'age'=>'required|string',
            'degree'=>'required|string',
            'email'=>'required|string',
            'freelance'=>'required|string'


        ]);

        $about =new About;
        $about->bd = $request->bd;
        $about->website = $request->website;
        $about->phone = $request->phone;
        $about->city = $request->city;
        $about->age = $request->age;
        $about->degree = $request->degree;
        $about->email = $request->email;
        $about->freelance = $request->freelance;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/portfolio', $fileName);
            $about->image = $fileName;
        }

        $about->save();
        return redirect('/about.create')->with('success', ' About created successfully');
    }

    public function edit($id){
        $about=About::find($id);
        return view('Backend.About.edit',compact('about'));
    }


    public function update(Request $request,$id){
        $this->validate($request, [
            'bd' => 'required|string',
            'website' => 'required|string',
            'phone'=>'required|string',
            'city'=>'required|string',
            'age'=>'required|string',
            'degree'=>'required|string',
            'email'=>'required|string',
            'freelance'=>'required|string'


        ]);

        $about =About::find($id);
        $about->bd = $request->bd;
        $about->website = $request->website;
        $about->phone = $request->phone;
        $about->city = $request->city;
        $about->age = $request->age;
        $about->degree = $request->degree;
        $about->email = $request->email;
        $about->freelance = $request->freelance;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/portfolio', $fileName);
            $about->image = $fileName;
        }

        $about->save();
        return redirect('/about.create')->with('success', ' About updated successfully');
    }
public function delete($id){
$about=About::find($id);
$about->delete();
return redirect('/about.index')->with('success', 'Deleted Successfully');
}

}
