@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="POST">
    @csrf
    @if(isset($post))
        @method('PUT')
    @endif

    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ old('title', isset($post) ? $post->title : '') }}" required><br>

    <label for="content">Content:</label>
    <textarea name="content" required>{{ old('content', isset($post) ? $post->content : '') }}</textarea><br>

    <label for="author">Author:</label>
    <input type="text" name="author" value="{{ old('author', isset($post) ? $post->author : '') }}" required><br>

    <button type="submit">Submit</button>
</form>
