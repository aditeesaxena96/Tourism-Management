<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tourist;
//use App\Http\Resources\TouristControllers;

class TouristController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tourists= Tourist::paginate(10);
        //return TouristResource::collection($tourists);
        return $tourists;
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
        $tourist=$request->isMethod('put')?Tourist::findOrFail(
            $request->id):new Tourist;
            $tourist->id= $request->input('id');
            $tourist->name= $request->input('name');
            $tourist->mobileNumber= $request->input('mobileNumber');
            $tourist->email= $request->input('email');
            $tourist->password= $request->input('password');
            
            if($tourist->save())
            {
                return $tourist;
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
        //
        $tourist=Tourist::findOrFail($id);
        return $tourist;
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $tourist=Tourist::findOrFail($id);
        if($tourist->delete());
        return $tourist;
    }
}
