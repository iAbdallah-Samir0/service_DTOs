<h1>All Posts</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<a href="{{ route('posts.create') }}">Create New Post</a>

<ul>
    @foreach ($posts as $post)
    <li>
        <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
    @endforeach
</ul>
