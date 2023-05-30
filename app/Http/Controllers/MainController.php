<?php

namespace App\Http\Controllers;

use App\Models\main;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $main = main::first();
        return view('Backend.main', compact('main'));
    }


    public function update(Request $request)
    {
        $this->validate($request, [
            'tittle' => 'required|string',
            'sub_tittle' => 'required|string'

        ]);

        $main = main::first();
        $main->tittle = $request->tittle;
        $main->sub_tittle = $request->sub_tittle;

        if ($request->file('bg_image')) {
            $image = $request->file('bg_image');
            $image->storeAs('public/img/','me' .$image->getClientOriginalExtension());
            $main->bg_image = 'storage/img/me.' .$image->getClientOriginalExtension();
        }
        $main->save();
        return redirect('/main')->with('success', ",Main page Updated Successfully");
    }


    public function destroy(string $id)
    {
        //
    }
}
