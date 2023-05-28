<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function create()
    {

        return view('Backend.Protfolio.create');
    }

    public function index()
    {
        $portfolios=Portfolio::all();
        return view('Backend.Protfolio.list',compact('portfolios'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category' => 'required|string',
            'date' => 'required|string',
            'url' => 'required|string',
            'tittle' => 'required|string',
            'description' => 'required|string'



        ]);

        $portfolio = new Portfolio;
        $portfolio->category = $request->category;
        $portfolio->date = $request->date;
        $portfolio->url = $request->url;
        $portfolio->tittle = $request->tittle;
        $portfolio->description = $request->description;


        if ($request->hasFile('bg_image')) {
            $file = $request->file('bg_image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/portfolio_project', $fileName);
            $portfolio->bg_image = $fileName;
        }
        if ($request->hasFile('sm_image')) {
            $file = $request->file('sm_image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/portfolio_project', $fileName);
            $portfolio->sm_image = $fileName;
        }


        $portfolio->save();
        return redirect('/portfolio.create')->with('success', ' Protfolio project created successfully');
    }

public function edit($id){
    $portfolio=Portfolio::find($id);
    return view('Backend.Protfolio.edit',compact('portfolio'));

}

public function update(Request $request,$id)
{
    $this->validate($request, [
        'category' => 'required|string',
        'date' => 'required|string',
        'url' => 'required|string',
        'tittle' => 'required|string',
        'description' => 'required|string'



    ]);

    $portfolio =Portfolio::find($id);
    $portfolio->category = $request->category;
    $portfolio->date = $request->date;
    $portfolio->url = $request->url;
    $portfolio->tittle = $request->tittle;
    $portfolio->description = $request->description;


    if ($request->hasFile('bg_image')) {
        $file = $request->file('bg_image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/portfolio_project', $fileName);
        $portfolio->bg_image = $fileName;
    }
    if ($request->hasFile('sm_image')) {
        $file = $request->file('sm_image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/portfolio_project', $fileName);
        $portfolio->sm_image = $fileName;
    }


    $portfolio->save();
    return redirect('/portfolio.create')->with('success', ' Protfolio project updated successfully');
}


public function delete($id){
    $portfolio=Portfolio::find($id);
    $portfolio->delete();
    return redirect('/portfolio.index')->with('success', 'Portfolio deleted successfully');
    }

}
