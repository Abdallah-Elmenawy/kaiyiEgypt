<?php

namespace App\Http\Controllers;

use App\Models\ServicBooking;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\ServiceBookingMail;
use App\Models\Car;

class ServicBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::all();
        return view('pages.service-booking', compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'car_id' => 'required|string',
            'date' => 'required|date',
            'number_plate' => 'required|string',
        ]);

        ServicBooking::create($validated);
        Mail::to('abdallahalielmenawy@gmail.com')->send(new ServiceBookingMail($validated));
        return redirect()->back()->with('success', __('service-booking.success_message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServicBooking  $servicBooking
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $car = Car::where('slug', $slug)->firstOrFail();
        $viewName = 'Models.' . $car->view;
        if (view()->exists($viewName)) {
            return view($viewName, compact('car'));
        } else {
            abort(404, 'Page not found');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicBooking  $servicBooking
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicBooking $servicBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicBooking  $servicBooking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicBooking $servicBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicBooking  $servicBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicBooking $servicBooking)
    {
        //
    }
}
