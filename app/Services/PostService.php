<?php

namespace App\Services;

use App\Models\Post;
use App\DTOs\PostDTO;

class PostService
{
    public function getAllPosts()
    {
        return Post::all();
    }



    public function getPostById($id)
    {
        return Post::findOrFail($id);
    }



    public function createPost(PostDTO $postDTO)
    {
        return Post::create([
            'title' => $postDTO->title,
            'content' => $postDTO->content,
            'author' => $postDTO->author,
        ]);
    }



    public function updatePost($id, PostDTO $postDTO)
    {
        $post = Post::findOrFail($id);
        $post->update([
            'title' => $postDTO->title,
            'content' => $postDTO->content,
            'author' => $postDTO->author,
        ]);
        return $post;
    }



    public function deletePost($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
    }

}
