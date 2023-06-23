<?php

namespace App\Http\Controllers;

use App\Models\Airplane;
use Illuminate\Http\Request;



class AirplaneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $airplane = Airplane::latest()->simplePaginate(5);
        return view('index', compact('airplane'))->with('i', (request()->input('page', 1) - 1) * 5);

        // $department = $request->search ? Department::where('name', $request->search)->paginate(5) : Department::latest()->simplePaginate(5);

        // return view('index', compact('department'))->with('i', (request()->input('page', 1) - 1) * 5);
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
           // 'RegistrationNumber' => 'required',
            'ModelNumber' => 'required',
            'Capacity' => 'required',
        ]);

        $airplane = new Airplane;
        $airplane->RegistrationNumber = $request->RegistrationNumber;
        $airplane->ModelNumber = $request->ModelNumber;
        $airplane->Capacity = $request->Capacity;
        
        $airplane->save();
        
        return redirect()->route('airplanes.index')->with('success', 'Airplane Added successfully.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Airplane $airplane)
    {
        return view('show', compact('airplane'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Airplane $airplane)
    {
        return view('edit', compact('airplane'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$department)
    {
        $request->validate([
            //'RegistrationNumber' => 'required',
            'ModelNumber' => 'required',
            'Capacity' => 'required',
        ]);
    
        $airplane = Airplane::find($request->hidden_RegistrationNumber);
        $airplane->ModelNumber = $request->ModelNumber;
        $airplane->Capacity = $request->Capacity;
           
            $airplane->save();
              
            return redirect()->route('airplanes.index')->with('success', 'Department Data has been updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Airplane $airplane)
    {
        $airplane->delete();
        return redirect()->route('airplanes.index')->with('success', 'Airplane Data deleted successfully');
    }
}
