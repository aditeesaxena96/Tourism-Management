<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tourpackage;

class TourpackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tourpackage= Tourpackage::paginate(10);
        //return TouristResource::collection($tourists);
        return $tourpackage;
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
            $tourpackage=$request->isMethod('put')?Tourpackage::findOrFail(
            $request->id):new Tourpackage;
            $tourpackage->id= $request->$request->input('id');
            $tourpackage->packageName= $request->input('packageName');
            $tourpackage->packageType= $request->input('packageType');
            $tourpackage->packageLocation= $request->input('packageLocation');
            $tourpackage->packagePrice= $request->input('packagePrice');
            $tourpackage->packageFeatures= $request->input('packageFeatures');
            $tourpackage->packageimage= $request->input('packageImage');
            if($tourpackage->save())
            {
                return $tourpackage;
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
        $tourpackage=Tourpackage::findOrFail($id);
        return $tourpackage;
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
