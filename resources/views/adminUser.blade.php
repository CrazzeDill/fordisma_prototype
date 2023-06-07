@extends('layouts.admin')

@section('content')
    <div class="main-container">
        <div class="tabel-admin">
            <table class="table ">
                <thead class="table-secondary sticky-top">
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Likes</th>
                        <th scope="col">Posts</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user['name'] }}</td>
                                <td>{{ str_replace(' ', '_', $user['name']) }}@gmail.com</td>
                                <td>User</td>
                                <td>52103</td>
                                <td>10</td>
                                <td class="">
                                    <a class="btn btn-primary" href="/p/{{ str_replace(' ', '_', $user['name']) }}"><i class="fa fa-share-square" aria-hidden="true"></i></a>
                                    <a href="" class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                    <button onclick="confirmDeleteA(this)"  class="btn btn-danger"><i class="fa fa-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    @endfor

                </tbody>
            </table>
        </div>
        
    </div>
@endsection
