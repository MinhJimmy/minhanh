<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Order;

class BookingController extends Controller
{
  /**
   *  index
   */
  public function index()
  {
    $bookings = Booking::orderBy('id_book', 'desc')->get();

    return view('admin.bookings.dashboard', compact('bookings'));
  }
}
