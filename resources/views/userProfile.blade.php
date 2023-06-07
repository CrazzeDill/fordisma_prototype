@extends('layouts.main')

@section('content')
    <div class="main-container">
        <div class="profile-top">
            <div class="profile-bg">
                <div class="profile-pic">
                    <img class="rounded-circle" src="https://github.com/CrazzeDill.png" alt="CrazzeDill" width="100"
                        style="background-color: gray">
                </div>
            </div>
            <div class="profile-head">
                
                <h6 class="fw-bold">@ {{$current}}</h6>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus iure expedita cumque similique
                    praesentium dolore eaque suscipit soluta corrupti, veritatis magnam porro natus dignissimos magni ad
                    dolor tempora ex ratione?</span>
            </div>      
        </div>

        @foreach ($posts as $post)
            <div class="posts"
                onclick="location.href = `/t/{{ str_replace(' ', '_', $post['topic']) }}/post/{{ $post['slug'] }}`;">
                <div class="post-identity">
                    <div class="post-author">
                        <img class="rounded-circle" src="https://github.com/CrazzeDill.png" alt="CrazzeDill" width="50"
                            style="background-color: gray">
                        <div class="post-author-det">
                            <span class="fw-bold">{{ $post['author'] }}</span>
                            <span class="text-body-secondary">{{ $post['date'] }}</span>
                        </div>
                    </div>
                    <div class="topik-btns">
                        <a href="/t/{{ str_replace(' ', '_', $post['topic']) }}" class="btn btn-primary">{{ $post['topic'] }}
                        </a>
                        <button onclick="toggleFollow(this, event)" class="btn btn-primary" style="color:gold">
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </button>    
                    </div>
                    
                </div>
                <div class="post-content">
                    <h5 class="fw-bold">{{ $post['title'] }}</h5 class="fw-bold">
                    <span>{{ $post['content'] }}</span>
                </div>
                <div class="post-actions">
                    <div class="d-flex align-items-center">
                        <a class="text-primer align-bottom"
                            href="/t/{{ str_replace(' ', '_', $post['topic']) }}/post/{{ $post['slug'] }}">
                            <i class="fa-regular fa-message"></i>
                            <span>{{ $post['replies'] }} replies</span>
                        </a>
                        <div class="d-flex align-items-center px-3">
                            <button class="btn px-1 text-primer" onclick="toggleLike(this,event)"><i
                                    class="far fa-thumbs-up" aria-hidden="true"></i></button>
                            <span class="px-1">{{ $post['likes'] }}</span>
                            <button class="btn px-1 text-primer" onclick="toggleDislike(this,event)"><i
                                    class="far fa-thumbs-down" aria-hidden="true"></i></button>
                        </div>
                        <button class="btn text-primer report-btn" data-bs-toggle="modal" data-bs-target="#reportModal">
                            <i class="fa-regular fa-flag"></i>
                        </button>
                    </div>
                    <a class="btn text-primer"
                        href="/t/{{ str_replace(' ', '_', $post['topic']) }}/post/{{ $post['slug'] }}/edit">
                        <i class="fa-regular fa-pen-to-square"></i>
                        <span>Edit Post</span>
                    </a>
                </div>
            </div>
        @endforeach

    </div>
@stop

@section('rbar')

@endsection
