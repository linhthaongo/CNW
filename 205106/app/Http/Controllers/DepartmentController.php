<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;



class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$department = Department::latest()->simplePaginate(5);
        //return view('index', compact('department'))->with('i', (request()->input('page', 1) - 1) * 5);

        // $department = $request->search ? Department::where('name', $request->search)->paginate(5) : Department::latest()->simplePaginate(5);

        // return view('index', compact('department'))->with('i', (request()->input('page', 1) - 1) * 5);
        $department = Department::all();
        return view('index', compact('department'));

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
            'name' => 'required',
            'location' => 'required',
        ]);

        $department = new Department;
        $department->id = $request->id;
        $department->name = $request->name;
        $department->location = $request->location;
        
        $department->save();
        
        return redirect()->route('departments.index')->with('success', 'Department Added successfully.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        return view('show', compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        return view('edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$department)
    {
        $request->validate([
            //'id' => 'required',
            'name' => 'required',
            'location' => 'required',
        ]);
    
        $department = Department::find($request->hidden_id);
            $department->name = $request->name;
            $department->location = $request->location;
           
            $department->save();
              
            return redirect()->route('departments.index')->with('success', 'Department Data has been updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('departments.index')->with('success', 'Department Data deleted successfully');
    }
}
