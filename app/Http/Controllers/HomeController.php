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

    public function list()
    {
        return view("Front-Office.list");
    }
}
