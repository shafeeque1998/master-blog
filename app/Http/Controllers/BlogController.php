<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\BlogPostRequest;

class BlogController extends Controller
{
    public function store(BlogPostRequest $request)
{

    try {
            // Create a new blog post using Eloquent's create method with validated data
        $blog = Blog::create($request->validated());

            // Return the created blog post and a 201 status code upon success
        return response()->json(['message' => 'Blog post created successfully', 'data' => $blog], 201);
    } catch (\Exception $e) {
            // Handle any database or other exceptions
        return response()->json(['message' => 'Failed to create blog post', 'error' => $e->getMessage()], 500);
    }
}

}
