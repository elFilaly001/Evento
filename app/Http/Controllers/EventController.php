<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::where("user_id", "=", session('user_id'))->orderBy("created_at", "desc")->paginate(10);
        $categories = Category::orderBy("created_at", "desc")->paginate(10);
        return view("Back-office.tables", compact(["events", "categories"]));
    }

    public function Home_index()
    {
        return view("Front-Office.index");
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
    public function store(EventRequest $request)
    {
        $inputs = $request->all();
        if ($request->hasFile("image")) {
            $file = $request->file("image");
            $filename = time() . "." . $file->getClientOriginalExtension();
            $inputs['image'] = $filename;
            if ($inputs['validation'] == 'automatic') {
                $inputs['status'] = 'approved';
            } elseif ($inputs['validation'] == 'Manuel') {
                $inputs['status'] = 'pending';
            }
            $inputs['user_id'] = session("user_id");
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
        $event = Event::find($event->id);
        $categories = Category::orderBy('created_at', 'desc')->paginate(10);
        return view('Back-office.eventEdit', compact(["event", "categories"]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, Event $event)
    {
        // dd($request);
        if ($request->hasFile('image')) {
            $file = $request->file("image");
            $filename = time() . "." . $file->getClientOriginalExtension();
            $event['image'] = $filename;
            $event = Event::find($event->id);
            $event->title = $request->title;
            $event->description = $request->description;
            $event->date = $request->date;
            $event->location = $request->location;
            $event->category_id = $request->category;
            $event->update();
            $file->move(public_path("/upload/events/imgs"), $filename);
            return redirect()->route("Admin_index", $event->id)->with("success", "updated succesfully");
        } else {
            $event = Event::find($event->id);
            $event->title = $request->title;
            $event->description = $request->description;
            $event->date = $request->date;
            $event->location = $request->location;
            $event->category_id = $request->category;
            $event->update();
            return redirect()->route("Admin_index", $event->id)->with("success", "updated succesfully");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event = Event::where('id', $event->id)->first();
        $event->delete();
        return redirect()->route('home')->with('success', 'Delete event with success');
    }
}
