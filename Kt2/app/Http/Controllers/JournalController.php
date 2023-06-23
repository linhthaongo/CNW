<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $journals = Journal::all();
        return view('index', compact('journals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Journal::create($request->all());
        return redirect()->route('journal.index')->with('thongbao' , 'Them n tap chi thanh cong');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $journal = Journal::findOrFail($id);
        return view('edit',compact('journal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $journal = Journal::findOrFail($id);
        $journal->update($request->all());
        return redirect()->route('journal.index')->with('thongbao' , 'Update thanh cong');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $journal = Journal::findOrFail($id);
        $journal->delete();
        return redirect()->route('journal.index')->with('thongbao' , 'Delete thanh cong');
    }
}
