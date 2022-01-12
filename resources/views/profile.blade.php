@extends('layouts.app')

@section('content')
    <h2 class="ms-4 mb-4" style="font-weight: bold; color: #d6d6d6">Profile Setting</h2>
    <div class="rounded m-4" style="width: 95%; background-color: #303030">
        <br>
        <strong><span class="ms-4" style="color: #d6d6d6">{{ Auth::user()->username }} Profile</span></strong>
        <br>
        <span class="ms-4" style="color: #d6d6d6">This information will be displayed publicly so be careful what you share.</span>
        <br><br>
        @if(session()->has('invalid'))
            <div class="bg-danger ms-4 mb-2 rounded" style="width: 70%; color: #d6d6d6">
                <span style="font-size: 20px" class="ms-4 ">{{ session('invalid') }}</span><br>
            </div>
        @endif
        <br>
        <form action="/updateprof" method="POST">
            @csrf
            <div class="ms-4">
                <label for="username" class="mb-2" style="font-weight: bold; color: #d6d6d6">Username</label>
            </div>
            <div class="form-group ms-4 d-flex" style="width: 98%;">
                <input type="text" class="form-control bg-dark" value="{{ Auth::user()->username }}" placeholder="Username" name="username" style="width: 98%; color: #d6d6d6; border: none" id="username">
            </div>
            <br>
            <div class="form-group ms-4">
                <label for="fullname" class="mb-2" style="font-weight: bold; color: #d6d6d6">Full Name</label>
                <input type="text" class="form-control bg-dark" value="{{ Auth::user()->fullname }}" placeholder="Full Name" name="fullname" style="width: 98%; color: #d6d6d6; border: none" id="fullname">
            </div>
            <br>
            <div class="form-group ms-4">
                <label for="password" class="mb-2" style="font-weight: bold; color: #d6d6d6">Current Password</label>
                <input type="password" class="form-control bg-dark" placeholder="Current Password" name="oldpass" style="width: 98%; color: #d6d6d6; border: none" id="oldpass">
                <label for="text" class="mt-1 text-info">Fill out this field to check if you are authorized.</label>
            </div>
            <br>
            <div class="form-group ms-4">
                <label for="password" class="mb-2" style="font-weight: bold; color: #d6d6d6">New Password</label>
                <input type="password" class="form-control bg-dark" placeholder="New Password" name="newpass" style="width: 98%; color: #d6d6d6; border: none" id="newpass">
                <label for="text" class="mt-1 text-info">Only if you want to change password</label>
            </div>
            <br>
            <div class="form-group ms-4">
                <label for="password" class="mb-2" style="font-weight: bold; color: #d6d6d6">Confirm Password</label>
                <input type="password" class="form-control bg-dark" placeholder="Confirm Password" name="confpass" style="width: 98%; color: #d6d6d6; border: none" id="confpass">
                <label for="text" class="mt-1 text-info">Only if you want to change password</label>
            </div>
            <br><br>
            <button type="submit" class="btn-secondary btn ms-4 mb-5">Update Profile</button>
        </form>
    </div>
@endsection
