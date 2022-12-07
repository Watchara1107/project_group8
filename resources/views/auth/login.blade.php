@extends('layouts.admin.master')
@section('content')
    <div class="d-flex">
        <div class="w-100">
            <h3 class="mb-4">Sign In</h3>
        </div>
        <div class="w-100">
            <p class="social-media d-flex justify-content-end">
                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span
                        class="fa fa-facebook"></span></a>
                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span
                        class="fa fa-twitter"></span></a>
            </p>
        </div>
    </div>
    <form class="signin-form" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group mt-3">
            <input type="text" class="form-control" name="username" required>
            <label class="form-control-placeholder" for="username">Username</label>
        </div>
        <div class="form-group">
            <input id="password-field" type="password" class="form-control" name="password" required>
            <label class="form-control-placeholder" for="password">Password</label>
            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
        </div>
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
        </div>
        <div class="form-group d-md-flex">

            <div class="w-100 text-md-center">
                <a href="{{ route('password.request') }}">Forgot Password</a>
            </div>
        </div>
    </form>
    <p class="text-center">Not a member? <a data-toggle="tab" href="{{ route('register') }}">Sign Up</a></p>
@endsection
