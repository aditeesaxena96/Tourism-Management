<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tourbooking;

class TourbookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking= Tourbooking::paginate(10);
       
        return $booking;
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
            $booking=$request->isMethod('put')?Tourist::findOrFail(
            $request->id):new Tourbooking;
            $booking->packageId= $request->packageId;
            $booking->email= $request->email;
            $booking->fromDate= $request->input('fromDate');
            $booking->toDate= $request->input('toDate');
            $booking->regDate= $request->input('regDate');
            $booking->status= $request->input('status');
            $booking->cancelledBy= $request->input('cancelledBy');
            if($booking->save())
            {
                return $booking;
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking=Tourbooking::findOrFail($id);
        return $booking;
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
        $booking=Tourbooking::findOrFail($id);
        if($booking->delete());
        return $booking;
    }
}
