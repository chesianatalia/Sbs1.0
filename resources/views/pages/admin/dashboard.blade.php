@extends('layouts.admin')

@section('title')
    ADMIN DASHBOARD
@endsection

@section('content')
    <div class="page-content dashboard">
        <div class="container">
            <div class="text-center">
                <h1 class="mb-0 title"><u>Step by Step</u></h1>
                <h4 class="mb-3">
                    ADMIN DASHBOARD<br> THIS IS STEP BY STEP ADMINISTRATOR PANEL
                </h4>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-5">
                    <div class="post mb-2">
                        <div class="title">
                            User
                        </div>
                        <div class="sum">
                            <h4> {{ $user }} </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="post mb-2">
                        <div class="title">
                            Post
                        </div>
                        <div class="sum">
                            <h4> {{ $post }} </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="timeline">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center mt-5 ">
                        <h5><u>Timeline</u></h5>
                    </div>
                    @forelse ($posts as $post)
                        <div class="container post">
                            <div class="row mt-2">
                                <div class="co-2">
                                    <div class="container">
                                        <img src="Images/logo.svg" alt="">
                                    </div>
                                </div>
                                <div class="social-profile-bg rounded-pill">
                                    <p>{{ $post->user->username }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center align-items-center">
                                    <h3>{{ $post->title }}</h3>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="product-thumbnail">
                                    <div class="product-image"
                                        style="background-image: url('{{ Storage::url($post->photo) }}');">
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="container col-8">
                                    <div class="product-text">
                                        <div>
                                            {{ $post->description }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex align-items-start">
                                <div class="col-12">
                                    <div class="container likecomment">
                                        <img src="Images/like.svg" alt="" class="ml-3 mt-2">
                                        <a href="{{ route('detail', $post->slug) }}">
                                            <img src="Images/comment.svg" alt="" class="ml-3 mt-2">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-4 button-readmore">
                                        <a href="{{ route('detail') }}"
                                            class="btn btn_warna btn-block mt-0 btn-sm rounded-pill">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 ml-3">24 Likes
                                </div>
                            </div>
                        </div>

                    @empty
                        <div class="col-12 text-center py-5">
                            No Post Found
                        </div>
                    @endforelse

                </div>
                <div class="row">
                    <div class="col-12 mt-4 md-4">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection
