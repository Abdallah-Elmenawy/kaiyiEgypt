<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\BookingConfirmationMail;
use App\Models\BookingRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class BookingRequestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
        'full_name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'email' => 'required|email|max:255',
        'location' => 'required|string|max:255',
        'car_id' => 'required|integer',
        'date' => 'required|date',
        'best_time' => 'required|string|max:50',
        'comment' => 'nullable|string',
    ]);

    BookingRequests::create($validated);

    Mail::to('kaiyimotorsegypt@gmail.com')->send(new BookingConfirmationMail($validated));
    session()->flash('Add', true);
    return back()->with('success', 'Your booking request has been submitted successfully!');
    }
}
