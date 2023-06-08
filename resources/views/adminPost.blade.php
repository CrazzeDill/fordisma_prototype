@extends('layouts.admin')

@section('content')
    <div class="main-container">
        <div class="tabel-admin">
            <table class="table ">
                <thead class="table-secondary sticky-top">
                    <tr>
                        <th scope="col">Topik</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Author</th>
                        <th scope="col">Likes</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post['topic'] }}</td>
                                <td>{{ $post['title'] }}</td>
                                <td>{{ $post['author'] }}</td>
                                <td>{{ $post['likes'] }}</td>
                                <td class="">
                                    <a class="btn btn-primary" href="/t/{{ str_replace(' ', '_', $post['topic']) }}/post/{{ $post['slug'] }}"><i class="fa fa-share-square" aria-hidden="true"></i></a>

                                    @if (isset($post['isPinned']))
                                    <button onclick="appendAlert('Post berhasil di-Pin','success')" class="btn btn-success"><i class="fa fa-thumb-tack" aria-hidden="true"></i></button>
                                        
                                    @else
                                    <button onclick="appendAlert('Post berhasil di-Pin','success')" class="btn btn-primary"><i class="fa fa-thumb-tack" aria-hidden="true"></i></button>
                                        
                                    @endif
                                    <button onclick="confirmDeleteA(this)" class="btn btn-danger"><i class="fa fa-trash"
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
