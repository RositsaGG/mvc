@extends('layouts.app')


@section('navigation')
  @include('navigation')
@endsection

@section('maincontent')
<h2>Детайли за заявката</h2>
<p><strong>Име на тортата:</strong> {{ $post->title }}</p>
<p><strong>Допълнителни изисквания:</strong> {{ $post->body }}</p>
<!-- 
<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p> -->
<a href="{{ route('posts.index') }}">Back to all posts</a>
@endsection

@section('sidebar')
  @include('sidebar')
@endsection('sidebar')