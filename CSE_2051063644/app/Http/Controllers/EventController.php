<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;



class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event = Event::all();
        return view('index', compact('event'));

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
            'title' => 'required',
            'description' => 'required',
            'date'=> 'required',
            'location'=> 'required'
        ]);

        $event = new Event;
        $event->id = $request->id;
        $event->name = $request->title;
        $event->description = $request->description;
        $event->location = $request->location;
        
        $event->save();
        
        return redirect()->route('events.index')->with('success', 'Added successfully.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$event)
    {
        $request->validate([
            //'id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'date'=> 'required',
            'location'=> 'required'
        ]);
    
        $event = Event::find($request->hidden_id);
        $event->name = $request->title;
        $event->description = $request->description;
        $event->location = $request->location;
           
        $event->save();
              
        return redirect()->route('events.index')->with('success', 'Data has been updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Data deleted successfully');
    }
}

