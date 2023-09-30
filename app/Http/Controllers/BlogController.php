<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function store(Request $request){

        // Validate the incoming request data
        $validatedData = Validator::make($request->all(), [
            'heading' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        if ($validatedData->fails()) {
            return response()->json(['errors' => $validatedData->errors()], 422); 
        }else{
            Blog::create($validatedData);

            // Return a response indicating success
            return response()->json(['message' => 'Blog post created successfully'], 201);
        }


        
    }
}
