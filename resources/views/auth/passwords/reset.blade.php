@extends('layouts.admin.master')
@section('text')
<form class="login100-form validate-form"method="POST" action="{{ route('password.update') }}">">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <center>
        <img src="{{ asset('admin/images/logo.png') }}">
    </center>
    <span class="login100-form-title p-b-34 p-t-15">
        Reset Password
    </span>

    <div class="wrap-input100 validate-input" data-validate = "Enter email">
        <input class="input100" type="text" name="email"value="{{ $email ?? old('email') }}"  placeholder="email">
        <span class="focus-input100" data-placeholder="&#xf2da;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter password">
        <input class="input100" type="password" name="password" placeholder="Password">
        <span class="focus-input100" data-placeholder="&#xf191;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter password_confirmation">
        <input class="input100" type="password" name="password_confirmation" placeholder="password_confirmation">
        <span class="focus-input100" data-placeholder="&#xf191;"></span>
    </div>
    <div class="container-login100-form-btn">
        <button class="login100-form-btn">
            Register
        </button>
    </div>

    <div class="text-center p-t-20">
        <a class="txt1" href="{{ url('/')}}">
            go to home
        </a>
    </div>

    <div class="text-center p-t-10">
        <a class="txt1" href="{{ route('login')}}">
            go to login
        </a>
    </div>

    <div class="text-center p-t-10">
        <a class="txt1" href="{{ route('password.request') }}">
            Forgot Password?
        </a>
    </div>
</form>
@endsection
