@extends('layouts.admin.master')
@section('content')
    <div class="d-flex">
        <div class="w-100">
            <h3 class="mb-4">Sign Up</h3>
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
    <form class="signin-form" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group mt-3">
            <input type="text" class="form-control" name="name" required>
            <label class="form-control-placeholder" for="name">Name</label>
        </div>

        <div class="form-group mt-3">
            <input type="text" class="form-control" name="username" required>
            <label class="form-control-placeholder" for="username">Username</label>
        </div>

        <div class="form-group mt-3">
            <input type="text" class="form-control" name="phone" required>
            <label class="form-control-placeholder" for="phone">Phone</label>
        </div>

        <div class="form-group mt-3">
            <input type="text" class="form-control" name="address" required>
            <label class="form-control-placeholder" for="address">Address</label>
        </div>

        <div class="form-group mt-3">
            <input type="text" class="form-control" name="email" required>
            <label class="form-control-placeholder" for="email">Email</label>
        </div>

        <div class="form-group">
            <input id="password-field" type="password" class="form-control" name="password" required>
            <label class="form-control-placeholder" for="password">Password</label>
            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
        </div>

        <div class="form-group">
            <input id="password-field" type="password" class="form-control" name="password_confirmation" required>
            <label class="form-control-placeholder" for="password">password Confirm</label>
            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
        </div>
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
        </div>
        <div class="form-group d-md-flex">


        </div>
    </form>
    <p class="text-center">Go To <a data-toggle="tab" href="{{ route('login') }}">Sign In</a></p>
@endsection
