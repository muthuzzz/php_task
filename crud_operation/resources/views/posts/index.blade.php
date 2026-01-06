<a href="{{ route('posts.create') }}">Create Post</a>
<h1>Posts</h1>

@foreach($posts as $post)
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->content }}</p>
    <a href="{{ route('posts.edit', $post) }}">Edit</a>
    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button>Delete</button>
        
    </form>
    <hr>
@endforeach

