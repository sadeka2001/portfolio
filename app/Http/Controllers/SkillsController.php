<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function create()
    {
        return view('Backend.Skills.create');
    }

    public function index()
    {
        $skills = Skills::all();
        return view('Backend.Skills.index', compact('skills'));
        
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tittle' => 'required|string',
            'score' => 'required|string',
        ]);

        $skill = new Skills;
        $skill->tittle = $request->tittle;
        $skill->score = $request->score;

        $skill->save();
        return redirect('/skills.create')->with('success', ' Skills created successfully');
    }

    public function edit($id)
    {
        $skills = Skills::find($id);
        return view('Backend.Skills.edit', compact('skills'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tittle' => 'required|string',
            'score' => 'required|string',
        ]);

        $skill = Skills::find($id);
        $skill->tittle = $request->tittle;
        $skill->score = $request->score;
        $skill->save();
        return redirect('/skills.create')->with('success', ' Skills updated successfully');
    }
  public function delete($id){
  $skills=Skills::find($id);
  $skills->delete();
   return redirect('/skills.index')->with('success', 'Deleted Successfully');
    }

}
