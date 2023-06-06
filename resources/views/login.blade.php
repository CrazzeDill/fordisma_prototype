@extends('layouts.lologin')

@section('content')
<form action="{{ route('login-form') }}" method="POST" class="needs-validation" novalidate>
    @csrf
    <div class="d-flex flex-column login-field">
        <label for="user">Email or Username</label>
        <input class="form-control" type="text" name="user" id="user" required>
    </div>
    <div class="d-flex flex-column login-field">
        <label for="pass">Password</label>
        <div class="password-container">
            <input class="form-control" type="password" name="pass" id="pass" required>
            <button class="toggle-password" type="button" data-target="pass">
                <i id="pass-icon" class="fa-regular fa-eye align-middle"></i>
            </button>
        </div>
    </div>
    <div class="d-flex justify-content-between mt-2">
        
        <div class="d-flex align-items-center">
            <input type="checkbox" name="remember" id="remember" class="me-2">
            <label for="remember">Remember Me</label>
        </div>
        <div>
            <a class="text-primer fw-bold" href="">Forgot Password?</a>
        </div>
    </div>
    <div class="d-flex mt-3">
        <button class="btn btn-primary w-100" type="submit">Login</button>
    </div>
</form>
<div class="d-flex">
    <span>Belum punya akun? <a class="text-primer fw-bold" href="/register">Daftar</a></span>
</div>
@stop