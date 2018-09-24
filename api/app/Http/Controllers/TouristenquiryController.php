<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tourenquiry;

class TouristenquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enquiry= Tourenquiry::paginate(10);
        //return TouristResource::collection($tourists);
        return $enquiry;
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
            $enquiry=$request->isMethod('put')?Tourenquiry::findOrFail(
            $request->id):new Tourenquiry;
            $enquiry->id= $request->input('id');
            $enquiry->name= $request->input('name');
            $enquiry->email= $request->input('email');
            $enquiry->mobileNumber= $request->input('mobileNumber');
            $enquiry->subject= $request->input('subject');
            $enquiry->description= $request->input('description');
            if($enquiry->save())
            {
                return $enquiry;
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
        $enquiry=Tourenquiry::findOrFail($id);
        return $enquiry;
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
        $enquiry=Tourenquiry::findOrFail($id);
        if($enquiry->delete());
        return $enquiry;
    }
}
