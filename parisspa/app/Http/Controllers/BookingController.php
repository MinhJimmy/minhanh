<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Personnel;
use App\Models\Room;
use App\Models\Spa;
use App\Models\Time;
use Illuminate\Http\Request;
use Carbon\Carbon;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $allSpa = Spa::all();
        $allPersonnel = Personnel::all();
        $allTime = Time::all();
        $allRoom = Room::all();

        return view('booking', [
            "phone" => $request->phone,
            "allSpa" => $allSpa,
            "allPersonnel" => $allPersonnel,
            "allTime" => $allTime,
            "allRoom" => $allRoom,
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Booking::create([
            "phone" => $request->phone,
            "name" => $request->name,
            "time" => $request->day." ".$request->time,
            "id_room" => $request->room,
            "id_spa" => $request->spa,
            "id_user" => 0,
            "status" => 1,
            "code" => 0,
            "updated" => now()
        ]);
        return view('booking_1');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookingRequest  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
