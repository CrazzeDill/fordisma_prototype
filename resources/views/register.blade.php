@extends('layouts.lologin')

@section('content')
<form action="{{ route('register-form') }}" method="POST" autocomplete="off" id="form-register" class="needs-validation" novalidate>
    @csrf
    <div class="d-flex flex-column login-field">
        <label for="user">Username*</label>
        <input class="form-control" type="text" name="user" id="user" required>
    </div>
    <div class="d-flex flex-column login-field">
        <label for="email">Email*</label>
        <input class="form-control" type="text" name="email" id="email" required>
    </div>
    <div class="d-flex flex-column login-field">
        <label for="pass">Password*</label>
        <div class="password-container">
            <input class="form-control" type="password" name="pass" id="pass" required>
            <button class="toggle-password" type="button" data-target="pass">
                <i id="pass-icon" class="fa-regular fa-eye align-middle"></i>
            </button>
        </div>
    </div>
    <div class="d-flex flex-column login-field">
        <label for="pass_confirmation">Confirm Password*</label>
        <div class="password-container">
            <input class="form-control" type="password" name="pass_confirmation" id="pass_confirmation" required>
            <button class="toggle-password" type="button" data-target="pass_confirmation">
                <i id="pass_confirmation-icon" class="fa-regular fa-eye align-middle"></i>
            </button>
        </div>
    </div>
    <div class="d-flex flex-column login-field">
        <label for="nim">NIM*</label>
        <input class="form-control" type="text" name="nim" id="nim" required>
    </div>
    <div class="d-flex flex-column login-field">
        <label for="nama">Nama*</label>
        <input class="form-control" type="text" name="nama" id="nama" required>
    </div>
    <div class="d-flex align-items-center justify-content-between mt-2">
        <div class="d-flex align-items-left flex-column">
            <div class="d-flex align-items-center">
                <input type="checkbox" name="tos" id="tos" class="me-2">
                <label for="tos">Saya sudah membaca terms of service*</label>
            </div>
            <div class="d-flex align-items-center">
                <input type="checkbox" name="tos" id="pp" class="me-2">
                <label for="pp">Saya sudah membaca Privacy Policy*</label>
            </div>
        </div>
    </div>
    <div id="error-message" style="color: red;"></div>
    @if ($errors->any())
    <div class="validation-errors "style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="d-flex mt-3">
        <button class="btn btn-primary w-100" type="submit">Daftar</button>
    </div>
</form>
<div class="d-flex">
    <span>Sudah punya akun? <a class="text-primer fw-bold" href="/login">Login</a></span>
</div>
@stop