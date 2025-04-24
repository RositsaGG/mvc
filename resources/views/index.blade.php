
@extends('layouts.app')

@section('navigation')
    @include('navigation')
@endsection

@section('maincontent')
    <h1>Моите заявки</h1>
    @if($posts->count())
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
        @endforeach
    @else
        <p>Нямате подадени заявки още.</p>
    @endif
@endsection

@section('sidebar')
    @include('sidebar')
@endsection
