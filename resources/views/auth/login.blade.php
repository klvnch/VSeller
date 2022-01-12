@extends('layouts.authlayout')

@section('content')
    <h1 class="text-light pb-4 ms-5" style="padding-top: 12%; font-weight: bold;">Login Page</h1>
    <form action="/logpro" method="POST">
        @csrf
        <div class="form-group ms-5">
            <label for="username" class="text-light mb-2">Username</label>
            <input type="text" class="form-control w-75" placeholder="Enter username" name="username" id="username">
        </div>
        <div class="form-group ms-5 mt-4">
            <label for="password" class="text-light mb-2">Password</label>
            <input type="password" class="form-control w-75" placeholder="Enter password" name="password" id="password">
        </div>
        <div class="form-group form-check ms-5 mt-4">
            <label class="form-check-label text-light">
                <input type="checkbox" class="form-check-input" name="remember" id="rememberid">Remember Me
            </label>
        </div>
        @if(session()->has('loginError'))
            <div class="alert alert-danger mt-3">
                <center><strong><span>{{ session('loginError') }}</span></strong></center>
            </div>
        @endif
        <div class="ms-5 mt-4">
            <button type="submit" class="btn-primary btn mt-4 w-75">Sign In</button>
        </div>
        <div class="text-end mt-4" style="font-weight: bold; margin-right: 23%">
            <a href="/register" class="link-primary">Dont have an account?</a>
        </div>
    </form>
@endsection
