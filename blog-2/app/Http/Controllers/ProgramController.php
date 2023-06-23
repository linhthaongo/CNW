<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;



class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $program = Program::all();
        return view('index', compact('program'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            //'id' => 'required',
            'Name' => 'required',
            'CreditPoints' => 'required',
            //'YearCommenced'=>'required',
        ]);

        $program = new Program;
        $program->id = $request->id;
        $program->name = $request->name;
        $program->creditpoints = $request->creditpoint;
        $program->yearcommenced = $request->yearcommenced;
        $program->save();
        
        return redirect()->route('programs.index')->with('success', 'Added successfully.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
        return view('show', compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        return view('edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$program)
    {
        $request->validate([
            //'id' => 'required'
            'Name' => 'required',
            'Credit Points' => 'required',
            'Year Commenced'=>'required',
        ]);
    
        $program = Program::find($request->hidden_id);
       // $program->id = $request->id;
        $program->name = $request->Name;
        $program->creditpoints = $request->CreditPoints;
        $program->yearcommenced = $request->YearCommenced;
           
            $program->save();
              
            return redirect()->route('programs.index')->with('success', 'Department Data has been updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->route('programs.index')->with('success', 'Department Data deleted successfully');
    }
}
