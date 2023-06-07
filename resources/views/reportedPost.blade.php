@extends('layouts.main')

@section('content')
    <div class="main-container">
        <div class="posts-edit">
            <div class="text-primer fw-bold text-center w-100 border-bottom pb-3">
                <i class="far fa-flag" aria-hidden="true"></i> Reported Posts
            </div>
            @foreach ($reports as $rep)
            <div class="report-item">
                <div class="post-identity">
                    <div class="post-author">
                        <img class="rounded-circle" src="https://github.com/CrazzeDill.png" alt="CrazzeDill" width="40"
                            style="background-color: gray">
                        <div class="reply-author-det">
                            <span class="fw-bold">{{$rep['author']}}</span>
                            <span class="text-body-secondary">{{$rep['date']}}</span>
                        </div>
                    </div>
                </div>
                <div class="report-content">
                    <span class="fw-bold">Reason :</span>
                    <span>
                        {{ $rep['context']}}
                    </span>
                    <span>reported by :{{$rep['reporter']}}</span>
                </div>
                <div class="post-actions text-primer border-bottom pb-2">
                    <div class="">
                        <button class="btn text-primer " onclick="confirmDeleteA(this)">
                            <i class="fa fa-trash" aria-hidden="true"></i> Delete Post
                        </button>
                        <a class="btn text-primer" href="/t/{{ str_replace(' ', '_', $rep['topic']) }}/post/{{ $rep['slug'] }}">
                            <i class="fa fa-share-square" aria-hidden="true"></i> Go to original post
                        </a>
                    </div>
                    <div class="">
                        <button class="btn text-primer " onclick="deleteGrandparent2(this,'Report berhasil diselesaikan')">
                            <i class="fa fa-check-circle" aria-hidden="true"></i> Resolved
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
           
            
        </div>
    </div>
@stop

@section('rbar')

@endsection
