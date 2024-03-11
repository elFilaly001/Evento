<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Category;
use App\Models\Event;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (session("user_role") == null) {
            return redirect()->route("login_index");
        } elseif (session("user_role") == "Admin") {
            $events = Event::orderBy("created_at", "desc")->paginate(10);
            return view("Back-office.tables", compact(["events"]));
        } elseif (session("user_role") == "Orgnizer") {
            $events = Event::where("user_id", "=", session('user_id'))->orderBy("created_at", "desc")->paginate(10);
            $PendingEvents = Event::where("user_id", "=", session('user_id'))
                ->where("validation", "=", "Manuel")
                ->where("status", "=", "Approved")
                ->orderBy("created_at", "asc")->get();
            $reservation = Reservation::where("status", "=", "Pending")->get();
            $categories = Category::orderBy("created_at", "desc")->paginate(10);
            return view("Back-office.tables", compact(["events", "categories", "PendingEvents", "reservation"]));
        } else {
            return redirect()->route("login_index");
        }
    }



    public function detail_index(Event $event)
    {
        $events = Event::where("id", "=", $event->id)->first();
        return view("Front-Office.detail-detail", compact("events"));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function Approve(Request $request)
    {
        $data = $request->id;
        $event = Event::where("id", "=",  $data)->first();
        $event["status"] =  "Approved";
        $event->update();
        // dd($event["status"]);
        return redirect()->route("Admin_index")->with("success", "success");
    }

    public function Reject(Request $request)
    {
        $data = $request->id;
        $event = Event::where("id", "=",  $data)->first();
        $event["status"] =  "Rejected";
        $event->update();
        // dd($event["status"]);
        return redirect()->route("Admin_index")->with("success", "success");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        // $submittedDateTime = $request->input('date');
        // $carbonDateTime = Carbon::parse($submittedDateTime);
        // $formattedDateTime = $carbonDateTime->format('d-m-Y H:i:s');

        // dd($request->all())
        $inputs = $request->all();
        if ($request->hasFile("image")) {
            $file = $request->file("image");
            $filename = time() . "." . $file->getClientOriginalExtension();
            $inputs['image'] = $filename;
            $inputs['status'] = 'pending';
            $inputs['user_id'] = session("user_id");
            // $inputs["date"] = $formattedDateTime;
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
        $event = Event::find($event->id);
        $categories = Category::orderBy('created_at', 'desc')->paginate(10);
        return view('Back-office.eventEdit', compact(["event", "categories"]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
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
            $event->num_places = $request->num_places;
            $event->validation = $request->validation;
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
            $event->num_places = $request->num_places;
            $event->validation = $request->validation;
            // dd($event);
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
