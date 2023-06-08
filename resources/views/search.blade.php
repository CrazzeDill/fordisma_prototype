@extends('layouts.main')

@section('content')
    <div class="main-container">
        <div class="search-cont">
            <div class="search-item"
                onclick="location.href = `/t/{{ str_replace(' ', '_', $post1['topic']) }}/post/{{ $post1['slug'] }}`;">
                <div class="replies-identity w-100">
                    <div class="post-author">
                        <img class="rounded-circle" src="https://github.com/CrazzeDill.png" alt="CrazzeDill" width="30"
                            style="background-color: gray">
                        <div class="reply-author-det ">
                            <a href="/p/{{ $post1['author'] }}" class="fw-bold text-black">{{ $post1['author'] }}</a>
                            <span class="text-body-secondary">{{ $post1['date'] }}</span>
                        </div>
                        <a class="text-black"
                            href="/t/{{ str_replace(' ', '_', $post1['topic']) }}">{{ $post1['topic'] }}</a>
                    </div>
                    <span class="fw-bold">{{ $post1['title'] }}</span>
                    <div class="text-body-secondary">
                        <span>{{ $post1['replies'] }} replies</span>
                        <span>{{ $post1['likes'] }} likes</span>
                    </div>
                </div>
            </div>
            <div class="search-item"
                onclick="location.href = `/t/{{ str_replace(' ', '_', $post2['topic']) }}/post/{{ $post2['slug'] }}`;">
                <div class="replies-identity w-100">
                    <div class="post-author">
                        <img class="rounded-circle" src="https://github.com/CrazzeDill.png" alt="CrazzeDill" width="30"
                            style="background-color: gray">
                        <div class="reply-author-det ">
                            <a href="/p/{{ $post2['author'] }}" class="fw-bold text-black">{{ $post2['author'] }}</a>
                            <span class="text-body-secondary">{{ $post2['date'] }}</span>
                        </div>
                        <a class="text-black"
                            href="/t/{{ str_replace(' ', '_', $post2['topic']) }}">{{ $post2['topic'] }}</a>
                    </div>
                    <span class="fw-bold">{{ $post2['title'] }}</span>
                    <div class="text-body-secondary">
                        <span>{{ $post2['replies'] }} replies</span>
                        <span>{{ $post2['likes'] }} likes</span>
                    </div>
                </div>
            </div>
            @for ($i = 0; $i < 6; $i++)
                <div class="search-item"
                    onclick="location.href = `/t/{{ str_replace(' ', '_', $post['topic']) }}/post/{{ $post['slug'] }}`;">
                    <div class="replies-identity w-100">
                        <div class="post-author">
                            <img class="rounded-circle" src="https://github.com/CrazzeDill.png" alt="CrazzeDill"
                                width="30" style="background-color: gray">
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
        <a class="post-author text-black" href="/p/Hazron_Redian">
            <img class="rounded-circle" src="https://github.com/CrazzeDill.png" alt="CrazzeDill" width="30"
                style="background-color: gray">
            <span class="fw-bold text-black">Hazron Redian</span>
        </a>
    </div>

    <div class="card-page">
        <h5 class="fw-bold w-100">Topik</h5>
        <a class="post-author text-black" href="/t/Event_Kampus">
            <span class="rounded-circle" style="background-color: gray; width:30px;height:30px"></span>
            <span class="fw-bold text-black">Event Kampus</span>
        </a>
        <a class="post-author text-black" href="/t/Seni_dan_Karya_Kreatif">
            <span class="rounded-circle" style="background-color: gray; width:30px;height:30px"></span>
            <span class="fw-bold text-black">Seni dan Karya Kreatif</span>
        </a>
    </div>
@endsection
