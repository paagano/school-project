@extends('layouts.app')

@section('content')
    
  <h1 class="sign-up">Sign Up Here:</h1>
  <div class="login-form rounded">
     <form action="{{route('register-user')}}" method="post">
            @if(Session::has('success'))
            <div>{{Session::get('success')}}</div>
            @endif

            @if(Session::has('fail'))
            <div>{{Session::get('fail')}}</div>
            @endif

            @csrf
            <div class="mb-3">
              <label for="exampleInputUsername1" class="form-label">Username</label>
              <input type="text" name="username" class="form-control" id="exampleInputUsername1" aria-describedby="usernameHelp" placeholder="Enter Your Username here...">
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email here...">
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password here...">
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Signup</button>
            </div>

           <br>
           <hr>
            
        </form>

        <div>
            <small>Successfully Registered?</small>
            <div>
              <small><span><a href="/login">Login Now</a></span></small>
            </div>
        </div>
    </div>


@endsection

!



 