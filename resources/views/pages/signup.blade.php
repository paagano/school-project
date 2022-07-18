@extends('layouts.app')

@section('content')
    <h1>Sign Up Here:</h1>
        <form action="{{route('register-user')}}" method="post">
            @if(Session::has('success'))
            <div>{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div>{{Session::get('fail')}}</div>
            @endif
            @csrf
            <div>
                <input type="text" name="username" placeholder="Enter username">
            </div>

            <div>
                <input type="email" name="email" placeholder="Enter email">
            </div>

            <div>
                <input type="password" name="password" placeholder="Enter password">
            </div>

            <div>
                <button type="submit">Signup</button>
            </div>
            <div>
            <h6><span><a href="/login" target="_blank">Login Now</a></span></h6>
        </div>
        </form>
@endsection