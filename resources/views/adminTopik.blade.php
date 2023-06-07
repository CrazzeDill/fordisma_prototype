@extends('layouts.admin')

@section('content')
    <div class="main-container">
        <div class="tabel-admin">
            <table class="table ">
                <thead class="table-secondary sticky-top">
                    <tr>
                        <th scope="col">Topik</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Post</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($topiks as $topik)
                        <tr>
                            <td>{{$topik['name']}}</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci veritatis autem architecto, inventore quas deserunt.</td>
                            <td>432</td>
                            <td class="">
                                <a href="" class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                <button onclick="confirmDeleteA(this)" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reportModal">
            Tambah Topik
        </button>
    </div>
@endsection
