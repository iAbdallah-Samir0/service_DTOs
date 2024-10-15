<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
<p>Author: {{ $post->author }}</p>
<p>Created at: {{ $post->created_at }}</p>

<a href="{{ route('posts.edit', $post->id) }}">Edit Post</a>
<a href="{{ route('posts.index') }}">Back to Posts</a>
