<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
  public function index(Request $request)
{
    $query = Hotel::query();

    // Apply filtering criteria if available
    if ($request->filled('name')) {
        $query->where('name', 'like', '%' . $request->input('name') . '%');
    }

    // Adjusted rating condition to filter hotels within a specific range
    if ($request->filled('rating')) {
        $selectedRating = $request->input('rating');
        $query->whereBetween('rating', [$selectedRating, $selectedRating + 0.9]);
    }

    if ($request->filled('price_min') && $request->filled('price_max')) {
        $query->whereBetween('price', [$request->input('price_min'), $request->input('price_max')]);
    }

    if ($request->filled('amenities')) {
        $query->where('amenities', 'like', '%' . $request->input('amenities') . '%');
    }

    $hotels = $query->paginate(6);
    return view('hotel', compact('hotels'));
}

}
