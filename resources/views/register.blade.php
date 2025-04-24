@extends('layouts.app')

@section('navigation')
  @include('navigation')
@endsection

@section('maincontent')

  <form action="{{route('users.store') }}" method="POST">
    @csrf
    <div class="container">
    <h1>Регистрация</h1>
    <p>Моля попълнетет формуляра за да се регистрирате успешно.</p>
    <hr>

    @if (Session::has('success'))
    <div class="alert alert-success">
      <ul>
      <li>{{Session::get('success') }}</li>
      </ul>
    </div>
  @endif

    @error('name')
    <p class="alert-danger">{{ $errors->first('name') }} </p>
  @enderror
    <label for="name"><b>Потребителско име</b></label>
    <input type="text" value="{{ old('name') }}" placeholder="Въведете име" name="name" id="name" required>

    @error('email')
    <p class="alert-danger">{{ $errors->first('email') }} </p>
  @enderror
    <label for="email"><b>Имейл</b></label>
    <input type="text" value="{{ old('email') }}" placeholder="Въведете вашия Имейл" name="email" id="email" required>

    @error('password')
    <p class="alert-danger">{{ $errors->first('password') }} </p>
  @enderror
    <label for="password"><b>Парола</b></label>
    <input type="password" placeholder="Въведете вашата парола" name="password" id="password" required>

    @error('psw-repeat')
    <p class="alert-danger">{{ $errors->first('samepwd') }} </p>
  @enderror
    <label for="psw-repeat"><b>Повторетет паролата</b></label>
    <input type="password" placeholder="Повторете вашатата парола тук" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <p>Създавайки си акаунт се съгласявате с нашите <a href="#">политики за поверителност  и правила за обработка на личните данни</a>.</p>
    <button type="submit" class="registerbtn">Регистрация</button>
    </div>

    <div class="container signin">
    <p>Вече имате акаунт? <a href="{{ route('login') }}">Вход</a>.</p>
    </div>
  </form>


@endsection('maincontent')

@section('sidebar')
  @include('sidebar')
@endsection('sidebar')