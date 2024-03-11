<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home_index()
    {
        $events = Event::orderBy("created_at", "asc")->limit(5)->get();
        $categories = Category::orderBy("created_at", "desc")->get();
        return view("Front-Office.index", compact(["events", "categories"]));
    }

    public function call_list($param1, $param2 = null)
    {
        return redirect()->route('list')->with(compact('param1', 'param2'));
    }
    public function list_index()
    {
        return view("Front-Office.list");
    }
    public function list()
    {
        $events = Event::where("status", "Approved")->orderBy("created_at", "desc")->paginate(10);
        $categories = Category::orderBy("created_at", "desc")->get();
        return view("Front-Office.list", compact(["categories", "events"]));
    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'event' => 'nullable|string',
            'category' => 'nullable|integer',
            'dates' => 'nullable|string',
        ]);
        // dd($request->all());
        $date = explode(">", $request->dates);
        $evdate = Event::select("date")->first();
        $evdate = explode(" ", $evdate->date);
        $eventsQuery = Event::whereRaw('LOWER(title) = ?', strtolower($request->event))
            ->orWhere("category_id", $request->category);

        if ($request->has('date')) {
            $date = explode(" ", $request->date);

            $eventsQuery->orWhere(function ($query) use ($date) {
                $query->whereDate('date', '>=', $date[0])
                    ->whereDate('date', '<=', $date[1]);
            });
        }

        $events = $eventsQuery->get();
        // dd($request);
        $categories = Category::orderBy("created_at", "desc")->get();
        // dd($events);
        return view("Front-Office.list", compact(["categories", "events"]));
    }

    public function search_list(Request $request)
    {
        $this->validate($request, [
            'event' => 'nullable|string',
            'category' => 'nullable|integer',
            'dates' => 'nullable|string',
        ]);
        // dd($request->all());  
        $date = explode(">", $request->dates);
        $evdate = Event::select("date")->first();
        $evdate = explode(" ", $evdate->date);
        $events = Event::where("title", $request->event)
            // ->orWhere(function ($query) use ($date) {
            //     $query->whereDate('date', '>=', $date[0])
            //         ->whereDate('date', '<=', $date[1]);
            // })
            ->orWhere("category_id", $request->category)
            ->get();

        return response()->json($events);
    }
}
