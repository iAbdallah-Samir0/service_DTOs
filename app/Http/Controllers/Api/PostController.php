<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return response()->json([
            'data' => $posts,
            'message' => 'Data retrieved successfully',
            'status' => '200',
        ], 200);
    }

    public function show($id)
    {
        $post = Post::find($id);
        if (is_null($post)){
            return response()->json([
                'data' => null,
                'message' => 'Data not found',
                'status' => '404',
            ],404);
        }else{
            return response()->json([
                'data' => $post,
                'message' => 'Data retrieved successfully',
                'status' => '200',
            ],200);
        }

    }

    public function store(Request $request)
    {

        $validator = validator::make($request->all(),[
            'title' => 'required|max:255',
            'content' => 'required',
            'author' => 'required',
        ]);


        if ($validator->fails())
        {
            return response()->json([
                'data' => null,
                'errors' => $validator->errors()->all(),
                'status' => '400',
            ], 400);

        }

        $post = Post::create($request->all());


        return response()->json([
                'data' => $post,
                'message' => 'This Post created successfully',
                'status' => '201',
            ],201);



    }

    public function update(Request $request , $id)
    {

        $validator = validator::make($request->all(),[
            'title' => 'required|max:255',
            'content' => 'required',
            'author' => 'required',
        ]);


        if ($validator->fails())
        {
            return response()->json([
                'data' => null,
                'errors' => $validator->errors()->all(),
                'status' => '400',
            ], 400);

        }

        $post = Post::find($id);

        if (!$post)
        {
         return response()->json([
             'data' => null,
             'message' => 'Data not found',
             'status' => '404',
         ],404);
        }


        $post->update($request->all());


        return response()->json([
            'data' => $post,
            'message' => 'This Post created successfully',
            'status' => '201',
        ],201);



    }



    public function destroy($id)
    {

        $post = Post::find($id);

        if (!$post)
        {
            return response()->json([
                'data' => null,
                'message' => 'Data not found',
                'status' => '404',
            ],404);
        }


        $post->delete($id);


        return response()->json([
            'data' => $post,
            'message' => 'This Post Deleted successfully',
            'status' => '200',
        ],200);



    }
}
