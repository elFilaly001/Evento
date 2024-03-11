<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function index()
    {
        $stats = Event::withCount("title");
        return view("Back-Office.stats", compact("stats"));
    }
}
