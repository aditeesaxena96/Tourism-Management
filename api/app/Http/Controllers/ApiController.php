<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    // public function api_demo()
    // {
    //     $data=[
    //         'name'=>'Aditee',
    //         'mobile'=>'789654123'
    //     ];
    //     return response()->json($data);
    // }

    // public function sendResponse($result, $message)
    // {
    // 	$response = [
    //         'success' => true,
    //         'data'    => $result,
    //         'message' => $message,
    //     ];


    //     return response()->json($response, 200);
    // }


    // public function sendError($error, $errorMessages = [], $code = 404)
    // {
    // 	$response = [
    //         'success' => false,
    //         'message' => $error,
    //     ];


    //     if(!empty($errorMessages)){
    //         $response['data'] = $errorMessages;
    //     }


    //     return response()->json($response, $code);
    // }

    // public function index()
    // {
    //     // $posts = Post::all();
    //     //return $this->sendResponse($posts->toArray(), 'Posts retrieved successfully.');
    // }
  

    // public function store(Request $request)
    // {
    //     $input = $request->all();


    //     $validator = Validator::make($input, [
    //         'name' => 'required',
    //         'description' => 'required'
    //     ]);


    //     if($validator->fails()){
    //         return $this->sendError('Validation Error.', $validator->errors());       
    //     }


    //     $post = Post::create($input);


    //     return $this->sendResponse($post->toArray(), 'Post created successfully.');
    // }



    // public function show($id)
    // {
    //     $post = Post::find($id);


    //     if (is_null($post)) {
    //         return $this->sendError('Post not found.');
    //     }


    //     return $this->sendResponse($post->toArray(), 'Post retrieved successfully.');
    // }
}
