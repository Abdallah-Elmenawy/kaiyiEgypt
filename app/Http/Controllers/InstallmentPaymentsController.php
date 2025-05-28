<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\InstallmentPayments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InstallmentPaymentRequest;

class InstallmentPaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'location' => 'required|string|max:255',
            'car_id' => 'required|exists:cars,id',
            'car_price' => 'required|numeric|min:0',
            'years' => 'required|integer|min:1',
            'comment' => 'nullable|string',
        ]);

        InstallmentPayments::create($validated);
        Mail::to('info@kaiyimotorsegypt.com')->send(new InstallmentPaymentRequest($validated));
        return redirect()->back()->with('success', 'Your quote request has been submitted successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\installmentPayments  $installmentPayments
     * @return \Illuminate\Http\Response
     */
    public function show(installmentPayments $installmentPayments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\installmentPayments  $installmentPayments
     * @return \Illuminate\Http\Response
     */
    public function edit(installmentPayments $installmentPayments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\installmentPayments  $installmentPayments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, installmentPayments $installmentPayments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\installmentPayments  $installmentPayments
     * @return \Illuminate\Http\Response
     */
    public function destroy(installmentPayments $installmentPayments)
    {
        //
    }
}
