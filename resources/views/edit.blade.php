@extends('layouts.app')

@section('maincontent')
<h1>Edit Post</h1>


<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT') <!-- This is important to tell Laravel you want to perform an UPDATE action -->
    <div>
        <label>Title</label>
        <input type="text" name="title" value="{{ old('title', $post->title) }}">
        @error('title') <p>{{ $message }}</p> @enderror
    </div>

    <div>
        <label>Content</label>
        <textarea name="content">{{ old('content', $post->content) }}</textarea>
        @error('content') <p>{{ $message }}</p> @enderror
    </div>

    <button type="submit">Update</button>
</form>


@endsection
