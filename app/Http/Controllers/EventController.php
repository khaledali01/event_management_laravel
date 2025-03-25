<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; // <-- Import Event model

class EventController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'event_date' => 'required|date',
            'venue' => 'required',
            'available_seats' => 'required|integer',
        ]);

        Event::create($request->all());

        return redirect()->route('events.index')->with('success', 'Event Created Successfully');
    }
}
