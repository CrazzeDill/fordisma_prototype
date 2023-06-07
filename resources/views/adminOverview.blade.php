@extends('layouts.admin')

@section('content')
<div class="main-container">
    <div class="row">
        <div class="col">
            <div class="admin-card">
                <div class="d-flex justify-content-between align-items-center w-100 fw-bold">
                    <span>Total Pengguna</span>
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <div class="d-flex justify-content-between align-items-center w-100 fw-bold mt-3">
                    <h1>911</h1>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="admin-card">
                <div class="d-flex justify-content-between align-items-center w-100 fw-bold">
                    <span>Total Balasan</span>
                    <i class="fa fa-comment" aria-hidden="true"></i>
                </div>
                <div class="d-flex justify-content-between align-items-center w-100 fw-bold mt-3">
                    <h1>7512</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="admin-card">
                <div class="d-flex justify-content-between align-items-center w-100 fw-bold">
                    <span>Topik Diskusi</span>
                    <i class="fa-solid fa-message"></i>
                </div>
                <div class="d-flex justify-content-between align-items-center w-100 fw-bold mt-3">
                    <h1>10</h1>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="admin-card">
                <div class="d-flex justify-content-between align-items-center w-100 fw-bold">
                    <span>Total Post</span>
                    <i class="fa fa-file-text" aria-hidden="true"></i>
                </div>
                <div class="d-flex justify-content-between align-items-center w-100 fw-bold mt-3">
                    <h1>4224</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <a href="/admin/post" class="btn btn-primary">Kelola Post</a>
        <a href="/admin/topik" class="btn btn-primary">Kelola Topik</a>
        <a href="/admin/p" class="btn btn-primary">Kelola Pengguna</a>
    </div>
</div>
@endsection