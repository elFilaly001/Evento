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
        return view("Back-office.tables");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        if ($request->hasFile("image")) {
            $file = $request->file("image");
            $filename = time() . "." . $file->getClientOriginalExtension();
            $inputs['image'] = $filename;
            if ($inputs['validation'] == 'automatic') {
                $inputs['status'] = 'aproved';
            } elseif ($inputs['validation'] == 'Manuel') {
                $inputs['status'] = 'pending';
            }
            // dd($inputs);
            Event::create($inputs);
            $file->move(public_path("/upload/events/imgs"), $filename);
            return redirect()->route('Admin_index')->with('success', 'Uploaded successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
