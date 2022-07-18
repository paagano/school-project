@extends('layouts.app')

@section('content')
        <form action="">
        <div>
            <input type="text" placeholder="Enter Your Username here...">
        </div>
        <div>
            <input type="password" placeholder="Enter Your Password here...">
        </div>
        <div>
            <button type="button">Login</button>
        </div>
        <div>
            <h6><span>Not Registered? <a href="/signup" target="_blank">Sign Up Here</a></span></h6>
        </div>
    </form>
@endsection