<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return response()->json([
            'data' => $posts,
            'message' => 'Data retrieved successfully',
            'status' => 'ok',
        ], 200);
    }

    public function show($id)
    {
        $post = Post::find($id);
        if (is_null($post)){
            return response()->json([
                'message' => 'Data not found',
                'status' => 'not found',
            ],404);
        }else{
            return response()->json([
                'data' => $post,
                'message' => 'Data retrieved successfully',
                'status' => 'ok',
            ],200);
        }

    }
}
