<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\PostService;
use App\DTOs\PostDTO;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }



    public function index()
    {
        $posts = $this->postService->getAllPosts();
        return view('posts.index', compact('posts'));
    }



    public function show($id)
    {
        $post = $this->postService->getPostById($id);
        return view('posts.show', compact('post'));
    }



    public function create()
    {
        return view('posts.create');
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'author' => 'required|max:255',
        ]);

        $postDTO = new PostDTO($validatedData['title'], $validatedData['content'], $validatedData['author']);
        $this->postService->createPost($postDTO);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }


    public function edit($id)
    {
        $post = $this->postService->getPostById($id);
        return view('posts.edit', compact('post'));
    }




    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'author' => 'required|max:255',
        ]);

        $postDTO = new PostDTO($validatedData['title'], $validatedData['content'], $validatedData['author']);
        $this->postService->updatePost($id, $postDTO);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }



    public function destroy($id)
    {
        $this->postService->deletePost($id);
        return redirect()->route('posts.index');
    }
}
