<h1>Create Post</h1>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title"><br><br>
    <textarea name="content" placeholder="Content"></textarea><br><br>
    <button type="submit">Save</button>
</form>
<a href="{{ route('posts.index') }}">Back</a>
