@extends('layouts.app')

@section('title')
    Step by Step Details
@endsection

@section('content')
    <div class="page-content dashboard">
        <div class="container">
            <div class="text-center">
                <h1 class="mb-0 title"><u>Step by Step</u></h1>
            </div>
        </div>
        <section class="timeline">
            <div class="container">
                <div class="container post">
                    <div class="row mt-2">
                        <div class="co-2">
                            <div class="container">
                                <img src="{{ asset('/Images/logo.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="social-profile-bg rounded-pill">
                            <p>{{ $posts->user->username }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <h3>{{ $posts->title }}</h3>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="product-thumbnail">
                            <div class="product-image"
                                style="background-image: url('{{ Storage::url($posts->photo) }}');">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="container col-8">
                            <div class="product-text">
                                <div>
                                    {{ var_dump($posts['description']) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5 mb-5">
                        <div class="col-6">
                            <div class="container">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <h3>Materials</h3>
                                </div>
                                <div class="container text-decoration-materials">
                                    {{ var_dump($posts['material']) }}
                                    {{-- {{ $posts->material }} --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="container">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <h3>Step by Step</h3>
                                </div>
                            </div>
                            <div class="container">
                                {{ var_dump($posts['stepbystep']) }}
                                {{-- {{ $posts->stepbystep }} --}}
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex align-items-start">
                        <div class="col-12">
                            <div class="container likecomment">
                                <img src="{{ asset('/Images/like.svg') }}" alt="" class="ml-3 mt-2">
                                <a href="#comment">
                                    <img src="{{ asset('/Images/comment.svg') }}" alt="" class="ml-3 mt-2">
                                </a>
                            </div>
                        </div>
                        <div class="col-12 ml-3">24 Likes
                        </div>
                    </div>
                    <div class="row mt-2" id="comment">
                        <div class="co-2">
                            <div class="container">
                                <img src="{{ asset('/Images/logo.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="social-profile-bg rounded-pill">
                            <p>Iqbal CJR</p>
                        </div>
                        <div class="rounded-pill d-flex justify-content-center align-items mt-3 ml-3">
                            <div class="col">
                                kak ini boleh ditambahin bawang bombay ga ya biar lebih mantap?
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="co-2">
                            <div class="container">
                                <img src="{{ asset('/Images/logo.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="social-profile-bg rounded-pill">
                            <p>Lisa Blackpinks</p>
                        </div>
                        <div class="rounded-pill d-flex justify-content-center mt-3 ml-3">
                            Boleh kak gaskeeen
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="co-2">
                            <div class="container">
                                <img src="{{ asset('/Images/logo.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <form action="" class="mt-3">
                                <div class="form-group col-12">
                                    <input type="Text" placeholder="Add a comment as chesianatalia..."
                                        class="form-control" />
                                </div>
                                <div class="col-lg-3 col-sm-5 button-search">
                                    <a href="#" class="btn btn_warna btn-block mt-3 btn">
                                        Comment
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>

@endsection
