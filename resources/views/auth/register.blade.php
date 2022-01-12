@extends('layouts.authlayout')

@section('content')
    <h1 class="text-light pb-2 ms-5" style="padding-top: 3%; font-weight: bold;">Register Page</h1>
    @if(session()->has('registerError'))
        <div class="bg-danger text-light mb-2 ms-5 rounded" style="width: 70%">
            <span style="font-size: 20px" class="ms-4">{{ session('registerError') }}</span><br>
        </div>
    @endif
    <form action="/regpro" method="POST">
        @csrf
        <div class="form-group ms-5">
            <label for="username" class="text-light mb-2">Username</label>
            <input type="text" class="form-control w-75" placeholder="Enter username (min 6 chars)" name="username" id="username">
        </div>
        <div class="form-group ms-5 mt-4">
            <label for="name" class="text-light mb-2">Full Name</label>
            <input type="text" class="form-control w-75" placeholder="Enter fullname" name="fullname" id="fullname">
        </div>
        <div class="form-group ms-5 mt-4">
            <label for="password" class="text-light mb-2">Password</label>
            <input type="password" class="form-control w-75" placeholder="Enter password (min 6 chars)" name="password" id="password">
        </div>
        <div class="form-group ms-5 mt-4">
            <label for="password" class="text-light mb-2">Role</label>
            <select name="role" id="roleselection" class="form-select w-75">
                <option value="0" selected>Role</option>
                <option value="1">Member</option>
                <option value="2">Admin</option>
            </select>
        </div>
        <div class="ms-5 mt-4">
            <button type="submit" class="btn-primary btn mt-4 w-75">Sign Up</button>
        </div>
        <div class="text-end mt-4" style="font-weight: bold; margin-right: 23%">
            <a href="/login" class="link-primary">Already have an account?</a>
        </div>
    </form>
@endsection
