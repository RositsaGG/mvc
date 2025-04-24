@extends('layouts.app')

@section('navigation')
    @include('navigation')
@endsection

@section('maincontent')

<form action="{{ route('login.submit') }}" method="POST">
    @csrf
    <div class="container">
        <h1>Вход</h1>
        <p>Моля въведете вашите данни:</p>
        <hr>
        {{-- Тук вече няма нужда да има @if (session('success')) --}}

        @if (Session::has('error'))
            <div class="alert alert-danger">
                <ul>
                    <li>{{ Session::get('error') }}</li>
                </ul>
            </div>
        @endif

        <label for="email"><b>Имейл</b></label>
        <input type="email" placeholder="Въведете вашия Имейл тук." name="email" id="email" required>

        @error('email')
            <p class="alert-danger">{{ $errors->first('email') }}</p>
        @enderror

        <label for="password"><b>Парола</b></label>
        <input type="password" placeholder="Въведете вашата парола тук." name="password" id="password" required>

        @error('password')
            <p class="alert-danger">{{ $errors->first('password') }}</p>
        @enderror

        <hr>

        <button type="submit" class="loginbtn">Вход</button>
    </div>

    <div class="container signin">
        <p>Нямате акаунт в нашия сайт? <a href="{{ route('register') }}">Регистрация</a>.</p>
    </div>
</form>

@endsection

@section('sidebar')
    @include('sidebar')
@endsection
