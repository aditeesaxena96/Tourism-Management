<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Tourist extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);
         return [
             'id'=>$this->id,
             'name'=>$this->name,
             'mobileNumber'=>$this->mobileNumber,
             'email'=>$this->email,
             'password'=>$this->password,
             
         ];

    }
    public function with($request)
    {
        
    }
}
