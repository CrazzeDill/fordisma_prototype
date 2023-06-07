@extends('layouts.main')

@section('content')
<div class="main-container">
    <div class="posts-edit">
        <form action="" class="w-100">
            <input type="text" placeholder="Title" value="{{$post['title']}}" class="form-control w-100 mb-3">
            <div class="border-bottom py-4 ">
                <input id="content" value="{{$post['content']}}" type="hidden" name="content">
                <trix-editor input="content"></trix-editor>
            </div>
            <div class="d-flex w-100 flex-row-reverse justify-content-between">
                <button type="submit" class="btn btn-primary mt-3">Submit Post</button>
                <button type="button" class="btn text-primer " onclick="confirmDelete(this, `/t/{{ str_replace(' ', '_', $post['topic']) }}/post/{{ $post['slug'] }}/delete`)">
                    <i class="fa fa-trash" aria-hidden="true"></i> Delete Post
                </button>
            </div>
        </form>
    </div>
</div>
@stop

@section('rbar')

@endsection