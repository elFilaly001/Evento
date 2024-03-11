<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::where("status", "=", "Approved")
            ->where("user_id", "=", session("user_id"))
            ->get();
        return view("Front-Office.Tickets", compact("reservations"));
    }
    public function ticket_index()
    {
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
        $event_status = Event::where("id", $request->id)->first();
        if ($event_status->validation == "automatic") {
            // dd(session("user_id"));
            $event_status->num_reservation++;
            Reservation::create([
                "status" => "Approved",
                "event_id" => $event_status->id,
                "user_id" => session("user_id"),
            ]);
            $event_status->update();
            return redirect()->route("home")->with("success", "reserved successfully");
        } elseif ($event_status->validation == "Manuel") {
            Reservation::create([
                "status" => "Pending",
                "event_id" => $event_status->id,
                "user_id" => session("user_id"),
            ]);
            return redirect()->route("home")->with("success", "reserved successfully");
        }
    }

    public function approve(Request $request)
    {
        $reservation = Reservation::where("id", $request->id)->first();
        $reservation->status = "Approved";
        // dd($reservation->status);
        $event_id = $reservation->event_id;
        $event = Event::where("id", $event_id)->first();
        $event->num_reservation++;
        $reservation->update();
        $event->update();
        return redirect()->route("Admin_index")->with("success", "approved");
    }
    public function reject(Request $request)
    {
        $reservation = Reservation::where("id", $request->id)->first();
        $reservation->status = "Rejected";
        // dd($reservation->status);
        $reservation->update();
        return redirect()->route("Admin_index")->with("success", "Rejected");
    }

    /**
     * Display the specified resource.
     */
    public function tickets_download(Request $request)
    {
        $res = Reservation::where("id", $request->id)->first();
        // dd($res->Event->Category->name);
        $data = [
            'title' => $res->Event->title,
            'category' => $res->Event->Category->name,
            'date' => $res->Event->date,
            'location' => $res->Event->location,
            'id' => $res->id,
            'user' => $res->User->name,
        ];

        $pdf = Pdf::loadView('Componants.Tickets', $data)->setPaper('A5');
        $exe = time() . '.pdf';
        return $pdf->download($exe);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
