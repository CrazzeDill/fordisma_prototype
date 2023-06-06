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
            <div class="d-flex w-100 flex-row-reverse">
                <button type="submit" class="btn btn-primary mt-3">Submit Post</button>
            </div>
        </form>
    </div>
</div>
@stop

@section('rbar')

@endsection