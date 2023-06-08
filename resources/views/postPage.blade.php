@extends('layouts.main')

@section('content')
<div class="main-container">
    <div class="post-cont">
        <div class="post-identity">
            <div class="post-author">
                <img class="rounded-circle" src="https://github.com/CrazzeDill.png" alt="CrazzeDill" width="50" style="background-color: gray">
                <div class="post-author-det">
                    <span class="fw-bold">{{ $post['author'] }}</span>
                    <span class="text-body-secondary">{{ $post['date'] }}</span>
                </div>
            </div>
            <div class="d-flex">
                <a href="/t/{{ str_replace(' ', '_', $post['topic']) }}" class="btn btn-primary me-1">{{ $post['topic'] }}
                </a>
                <button onclick="toggleFollow(this, event)" class="btn btn-primary" style="color:gold">
                    <i class="fa fa-star" aria-hidden="true"></i>
                </button>
            </div>
        </div>
        <div class="post-content">
            <h5 class="fw-bold">{{ $post['title'] }}</h5 class="fw-bold">
            <span>{!! $post['content'] !!}</span>
        </div>
        <div class="post-actions">
            <div class="d-flex align-items-center">
                <a class="text-primer align-bottom" href="/t/{{ str_replace(' ', '_', $post['topic']) }}/post/{{ $post['slug'] }}">
                    <i class="fa-regular fa-message"></i>
                    <span>{{ $post['replies'] }} replies</span>
                </a>
                <div class="d-flex align-items-center px-3">
                    <button class="btn px-1 text-primer" onclick="toggleLike(this,event)"><i class="far fa-thumbs-up" aria-hidden="true"></i></button>
                    <span class="px-1">{{ $post['likes'] }}</span>
                    <button class="btn px-1 text-primer" onclick="toggleDislike(this,event)"><i class="far fa-thumbs-down" aria-hidden="true"></i></button>
                </div>
                <button class="btn text-primer report-btn" data-bs-toggle="modal" data-bs-target="#reportModal">
                    <i class="fa-regular fa-flag"></i>
                </button>
            </div>
            <a class="btn text-primer" href="/t/{{ str_replace(' ', '_', $post['topic']) }}/post/{{ $post['slug'] }}/edit">
                <i class="fa-regular fa-pen-to-square"></i>
                <span>Edit Post</span>
            </a>
        </div>
    </div>
    <div class="posts-edit">
        <span>Reply as {{ 'USERNAME' }}</span>
        <form action="" class="w-100">
            <div class="border-bottom ">
                <input id="content" type="hidden" name="content">
                <trix-editor input="content"></trix-editor>
            </div>
            <div class="d-flex w-100 flex-row-reverse">
                <button type="submit" class="btn btn-primary mt-3">Reply</button>
            </div>
        </form>
        <button class="btn">Sort by: New <i class="fa fa-chevron-down" aria-hidden="true"></i></button>
        <div class="replies-cont">
            <div class="replies-identity">
                <div class="post-author">
                    <img class="rounded-circle" src="https://github.com/CrazzeDill.png" alt="CrazzeDill" width="30" style="background-color: gray">
                    <div class="reply-author-det">
                        <span class="fw-bold">Hazron Redian</span>
                        <span class="text-body-secondary">{{ $post['date'] }}</span>
                    </div>
                </div>
            </div>
            <div class="reply-content">
                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic mollitia reprehenderit et
                    recusandae commodi saepe enim fuga libero expedita, officia molestiae quasi illo nemo excepturi
                    voluptatibus quos, cum iusto dolor.</span>
                <div class="reply-action">
                    <div class="d-flex align-items-center">
                        <button class="text-primer align-bottom btn reply-button">
                            <i class="fa-regular fa-message"></i>
                            <span>Reply</span>
                        </button>
                        <div class="d-flex align-items-center px-3">
                            <button class="btn px-1 text-primer" onclick="toggleLike(this,event)"><i class="far fa-thumbs-up" aria-hidden="true"></i></button>
                            <span class="px-1 text-primer">1</span>
                            <button class="btn px-1 text-primer" onclick="toggleDislike(this,event)"><i class="far fa-thumbs-down" aria-hidden="true"></i></button>
                        </div>
                        <button class="btn text-primer report-btn" data-bs-toggle="modal" data-bs-target="#reportModal">
                            <i class="fa-regular fa-flag"></i>
                        </button>
                    </div>
                    {{-- MASUKKAN SINI --}}
                    <div class="reply-form">
                        <form action="" class="w-100">
                            <div class="border-bottom ">
                                <input id="content" type="hidden" name="content">
                                <trix-editor input="content"></trix-editor>
                            </div>
                            <div class="d-flex w-100 flex-row-reverse">
                                <button type="submit" class="btn btn-primary mt-3">Reply</button>
                            </div>
                        </form>
                    </div>
                    <div class="replies-identity">
                        <div class="post-author">
                            <img class="rounded-circle" src="https://github.com/CrazzeDill.png" alt="CrazzeDill" width="30" style="background-color: gray">
                            <div class="reply-author-det">
                                <span class="fw-bold">Regina</span>
                                <span class="text-body-secondary">{{ $post['date'] }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="reply-content">
                        <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic mollitia reprehenderit
                            et
                            recusandae commodi saepe enim fuga libero expedita, officia molestiae quasi illo nemo
                            excepturi
                            voluptatibus quos, cum iusto dolor.</span>
                        <div class="reply-action">
                            <div class="d-flex align-items-center">
                                <button class="text-primer align-bottom btn reply-button" href="">
                                    <i class="fa-regular fa-message"></i>
                                    <span>Reply</span>
                                </button>
                                <div class="d-flex align-items-center px-3">
                                    <button class="btn px-1 text-primer" onclick="toggleLike(this,event)"><i class="far fa-thumbs-up" aria-hidden="true"></i></button>
                                    <span class="px-1 text-primer">1</span>
                                    <button class="btn px-1 text-primer" onclick="toggleDislike(this,event)"><i class="far fa-thumbs-down" aria-hidden="true"></i></button>
                                </div>
                                <button class="btn text-primer report-btn" data-bs-toggle="modal" data-bs-target="#reportModal">
                                    <i class="fa-regular fa-flag"></i>
                                </button>
                            </div>
                            {{-- MASUKKAN SINI --}}
                            <div class="reply-form">
                                <form action="" class="w-100">
                                    <div class="border-bottom ">
                                        <input id="content" type="hidden" name="content">
                                        <trix-editor input="content"></trix-editor>
                                    </div>
                                    <div class="d-flex w-100 flex-row-reverse">
                                        <button type="submit" class="btn btn-primary mt-3">Reply</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('rbar')
<div class="card-page">
    <h5 class="fw-bold w-100">{{ $current }}</h5>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quos obcaecati id qui</p>
    <a class="btn btn-primary w-100" href="/createPost">Create Post</a>
</div>
@endsection


<script>
    document.addEventListener('DOMContentLoaded', () => {
        replyButtons = document.querySelectorAll('.reply-button');
        replyForms = document.querySelectorAll('.reply-form');

        // Attach click event listeners to each reply button
        replyButtons.forEach((button, index) => {
            button.addEventListener('click', (event) => {
                console.log('a')
                event.preventDefault();
                // Toggle the visibility of the corresponding reply form
                if (replyForms[index].classList.contains('reply-form')) {
                    replyForms[index].classList.remove('reply-form');
                } else {
                    replyForms[index].classList.add('reply-form');
                }
            });
        });
    });
</script>