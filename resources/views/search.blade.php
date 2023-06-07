@extends('layouts.main')

@section('content')
    <div class="main-container">
        <div class="search-cont">
            @for ($i = 0; $i < 6; $i++)
                <div class="search-item"
                    onclick="location.href = `/t/{{ str_replace(' ', '_', $post['topic']) }}/post/{{ $post['slug'] }}`;">
                    <div class="replies-identity w-100">
                        <div class="post-author">
                            <img class="rounded-circle" src="https://github.com/CrazzeDill.png" alt="CrazzeDill" width="30"
                                style="background-color: gray">
                            <div class="reply-author-det ">
                                <a href="/p/{{ $post['author'] }}" class="fw-bold text-black">{{ $post['author'] }}</a>
                                <span class="text-body-secondary">{{ $post['date'] }}</span>
                            </div>
                            <a class="text-black"
                                href="/t/{{ str_replace(' ', '_', $post['topic']) }}">{{ $post['topic'] }}</a>
                        </div>
                        <span class="fw-bold">{{ $post['title'] }}</span>
                        <div class="text-body-secondary">
                            <span>{{ $post['replies'] }} replies</span>
                            <span>{{ $post['likes'] }} likes</span>
                        </div>
                    </div>

                </div>
            @endfor


        </div>
    </div>
@stop

@section('rbar')
    <div class="card-page">
        <h5 class="fw-bold w-100">Pengguna</h5>
        <a class="post-author text-black" href="/p/dies_nas">
            <img class="rounded-circle" src="https://github.com/CrazzeDill.png" alt="CrazzeDill" width="30"
                                style="background-color: gray">
            <span class="fw-bold text-black">Dies nas</span>
        </a>
    </div>
@endsection
