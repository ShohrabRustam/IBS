@extends("main")
@section('title')
Login
@endsection
@section('section')


<div class="container" style="max-width: 500px;min-width:300px; min-height:300px;">
    <div class="wrapper">
      <div class="title"><span>Login Form</span></div>
      <form action="#" method="POST">
        <div class="row">
            <i class="fas fa-user"></i>
            <input name="name" type="text" placeholder="Full Name" required>
        </div>

        <div class="row">
          <i class="fas fa-user"></i>
          <input name="password" type="gmail" placeholder="Email" required>
        </div>

        <div class="row">
          <i class="fas fa-lock"></i>
          <input name="password" type="password" placeholder="Password" required>
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
