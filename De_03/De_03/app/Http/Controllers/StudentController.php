<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Student::latest()->paginate(5);
        return view('students/index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $programs = Program::all();
        return view("students/create",compact('programs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'txt_program_id' => 'required',
            'txt_givenNames' => 'required',
            'txt_surName' => 'required',
            'txt_Date_of_birth' => 'required',
            'txt_YearEnrolled' => 'required'
        ]);

        $student = new Student;

        $student->program_id = $request->txt_program_id;
        $student->GivenNames = $request->txt_givenNames;
        $student->SurName = $request->txt_surName;
        $student->Date_of_birth = $request->txt_Date_of_birth;
        $student->YearEnrolled = $request->txt_YearEnrolled;

        $student->save();

        return redirect()->route('students.index')->with('success', 'student Added successfully.');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Student $student)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $programs = Program::all();
        return view("students/edit", compact('student','programs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'txt_program_id' => 'required',
            'txt_GivenNames' => 'required',
            'txt_SurName' => 'required',
            'txt_Date_of_birth' => 'required',
            'txt_YearEnrolled' => 'required'
        ]);

        $student->program_id = $request->txt_program_id;
        $student->GivenNames = $request->txt_GivenNames;
        $student->SurName = $request->txt_SurName;
        $student->Date_of_birth = $request->txt_Date_of_birth;
        $student->YearEnrolled = $request->txt_YearEnrolled;

        $student->save();

        return redirect()->route('students.index')->with('success', 'student Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student Data has been delete successfully');
    }


}
