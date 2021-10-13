<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingDetailsController extends Controller
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
        $bookingdet = new bookingdetail;
              $bookingdet->bookingid = strtoupper("SC".Str::random(10));
              $bookingdet->serviceid = $request->input('serviceid');
              $bookingdet->servicename = $request->input('servicename');
              $bookingdet->bookingcost = $request->input('bookingcost');
              $bookingdet->servicecost = $request->input('servicecost');
              $bookingdet->paymenttype = $request->input('paymenttype');
              $bookingdet->serviceflag = "INITIATED";
             
              $bookingdet->userid = Auth::user()->id;
              $bookingdet->username = Auth::user()->name;
              $bookingdet->usercontact = Auth::user()->contact;
              $booking->save();
 //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
