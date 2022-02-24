@extends("main")
@section('title')
Registration
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
{{-- {{ $data }} --}}

<div class="container" style="max-width: 500px;min-width:300px; min-height:300px;">
    <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="registration" method="POST">
            @csrf

        @if(Session::has('fail'))

        <div class="alert alert-danger">{{  Session::get('fail')}}</div>
        @endif

        <div class="row">
            <i class="fas fa-user"></i>
            <input name="name" type="text" placeholder="Name" value="{{ old('name') }}" >
            <span class="text-danger">@error('name') {{ $message }} @enderror</span>
          </div>


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
        <div class="row">
            <i class="fas fa-lock"></i>
            <input name="confirm_password" type="password" placeholder="Confirm Password" >
            <span class="text-danger">@error('confirm_password') {{ $message }}    @enderror</span>
          </div>
          <br>

        <div class="row button">
          <input type="submit" value="Signup">
        </div>

      </form>
    </div>
  </div>
@endsection
