<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function store(Request $request){

        // Validate the incoming request data
        $validatedData = $request->validate([
            'heading' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Create a new blog post using Eloquent's create method
        $blog = Blog::create([
            'heading' => $validatedData['heading'],
            'content' => $validatedData['content'],
        ]);

        // Return a response indicating success
        return response()->json(['message' => 'Blog post created successfully'], 201);
    }
}
