@extends("main")
@section('title')
Login
@endsection
@section('section')
@php
    $data = '';
@endphp
{{-- @if($a==0)
    alert("Email or Password is wrong");
@endif --}}

{{--
@php
    echo $data;
@endphp --}}
{{ $data }}

<div class="container" style="max-width: 500px;min-width:300px; min-height:300px;">
    <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="/login" method="POST">
            @csrf
        @if(Session::has('fail'))

        <div class="alert alert-danger">{{  Session::get('fail')}}</div>
        @endif

        <div class="row">
          <i class="fas fa-user"></i>
          <input name="email" type="email" placeholder="Email" value="{{ old('email') }}">
          <span class="text-danger">@error('email') {{ $message }} @enderror</span>
        </div>

        <div class="row">
          <i class="fas fa-lock"></i>
          <input name="password" type="password" placeholder="Password"  >
          <span class="text-danger">@error('password') {{ $message }}    @enderror</span>
        </div>

        <div class="pass"><a href="#">Forgot password?</a></div>

        <div class="row button">
          <input type="submit" value="Login">
        </div>

        <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
      </form>
    </div>
  </div>
@endsection
