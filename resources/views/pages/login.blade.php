@extends('layouts.app')

@section('content')

<h1 class="sign-up">Login To Discover More!</h1>
<div class="login-form rounded">
    <form action="{{route('login-user')}}" method="post">
       @if(Session::has('success'))
          <div class="alert alert-success">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('fail'))
          <div class="alert alert-danger">{{Session::get('fail')}}</div>
          @endif
          @csrf
  <div class="mb-3">
    <label for="exampleInputUsername1" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" id="exampleInputUsername1" aria-describedby="usernameHelp" placeholder="Enter Your Username here...">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Enter Your Password here...">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>

  <br>

  <hr>

  <div>
    <small>Not Registered? </small>
    <div>
      <small><span><a href="/signup">  Sign Up Here</a></span></small>
    </div>
  </div>
</form>
</div>
@endsection