@extends('layouts.main')

@section('content')
<div class="main-container">
    <a class="create-post" href="/createPost">
        <button href="/" class="create-post-btn form-control">Create Post</button>
        <button class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
    </a>
    @foreach ($posts as $post)
    <div class="posts" onclick="location.href = `/t/{{str_replace(' ','_',$post['topic'])}}/post/{{$post['slug']}}`;">
        <div class="post-identity">
            <div class="post-author">
                <img class="rounded-circle" src="https://github.com/mdo.png" alt="mdo" width="50"
                    style="background-color: gray">
                <div class="post-author-det">
                    <span class="fw-bold">{{$post['author']}}</span>
                    <span class="text-body-secondary">{{$post['date']}}</span>
                </div>
            </div>
            <a href="" class="btn btn-primary">{{$post['topic']}}<i class="fa fa-star ps-2" aria-hidden="true"></i></a>
        </div>
        <div class="post-content">
            <h5 class="fw-bold">{{$post['title']}}</h5 class="fw-bold">
            <span>{{$post['content']}}</span>
        </div>
        <div class="post-actions">
            <div class="d-flex align-items-center">
                <a class="text-primer align-bottom" href="/t/{{str_replace(' ','_',$post['topic'])}}/post/{{$post['slug']}}">
                    <i class="fa-regular fa-message"></i>
                    <span>{{$post['replies']}} replies</span>
                </a>
                <div class="d-flex align-items-center px-3">
                    <button class="btn px-1 text-primer"  onclick="toggleLike(this,event)"><i class="far fa-thumbs-up"
                            aria-hidden="true"></i></button>
                    <span class="px-1">{{$post['likes']}}</span>
                    <button class="btn px-1 text-primer"  onclick="toggleDislike(this,event)"><i class="far fa-thumbs-down"
                            aria-hidden="true"></i></button>
                </div>
                <button class="btn text-primer">
                    <i class="fa-regular fa-flag"></i>
                </button>
            </div>
            <a class="btn text-primer" href="/t/{{str_replace(' ','_',$post['topic'])}}/post/{{$post['slug']}}/edit">
                <i class="fa-regular fa-pen-to-square"></i>
                <span>Edit Post</span>
            </a>
        </div>
    </div>
    @endforeach
</div>
@stop

@section('rbar')
<div class="card-page">
    <h5 class="fw-bold w-100">{{$current}}</h5>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quos obcaecati id qui</p>
    <a class="btn btn-primary w-100" href="/createPost">Create Post</a>
</div>
@endsection