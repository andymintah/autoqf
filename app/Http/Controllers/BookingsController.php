<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ServiceController;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BookingsController extends Controller
{
    public function index()
    {
        $booking = Booking::all();
        return view('bookings.index',['booking'=> $booking]); 
    }
  

   
   
    public function create()
    {
        $services = Service::all();

        return view ('bookings.create', ['services'=>$services]);

    }

 
    public function store(Request $request)
    {
        
     
             $booking = new booking;
              $booking->bookingid = strtoupper("SC".Str::random(10));
              $booking->bookingdetailid = $request->input('bookingdetailid');
              //$booking->bookingdate = $request->input('bookingdate');
              $booking->paymentref = $request->input('paymentref');

              $booking->bookingflag = "INITIATED";
              $booking->servicerequestdate = date("Y-m-d", strtotime($request->input('srequestdate')));
              $booking->servicedeliverydate = date("Y-m-d", strtotime($request->input('sdeliverydate')));

              $booking->userid = Auth::user()->id;
              $booking->username = Auth::user()->name;
              $booking->save();

            
 
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        $booking = Booking::find($booking->id);
        return view('book.show',['booking'=> $booking]); 



    }

    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        $booking = Booking::find($booking->schemeid);

        return view('booking.edit',['booking'=>$booking]);
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
