@extends('layouts.app')

@section('navigation')
    @include('navigation')
@endsection

@section('maincontent')
    <div class="container">
        <h1>Пусни заявка за торта</h1>
        <p>Моля попълнете всички поледа за да създадеет заявка за торта.</p>
                
        <form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <label for="title">Заглавие</label>
    <input type="text" id="title" name="title" required>

    <label for="content">Описание</label>
    <textarea id="content" name="content" required></textarea>

    <button type="submit" class="btn btn-primary">Пусни заявка</button>
</form>


    </div>
@endsection

@section('sidebar')
    @include('sidebar')
@endsection
