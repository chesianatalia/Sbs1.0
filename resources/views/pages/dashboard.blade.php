@extends('layouts.app')

@section('title')
    Step by Step Homepage   
@endsection

@section('content')
    <div class="page-content dashboard">
        <div class="container">
        <div class="text-center">
            <h1 class="mb-0 title"><u>Step by Step</u></h1>
            <h4 class="mb-3">
            What do you want to cook today?
            </h4>
        </div>
        </div>
        <div class="container">
        <div class="
                row
                d-flex
                justify-content-center
                align-items-center
                ">
            <div class="col-lg-12 col-md-6 ">
            <form action="" class="mt-3">
                <div class="form-group">
                <input type="Search" placeholder="Search For Recipes, Food Stuffs, Tools....." class="form-control" />
                </div>
                <div class="col-lg-2 col-sm-4 button-search">
                <a href="dashboard.html" class="btn btn_warna btn-block mt-3 btn">
                    Search
                </a>
                </div>
            </form>
            </div>
        </div>
        </div>
        <section class="homepage-categories">
        <div class="container">
            <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <h5><u>Categories</u></h5>
            </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
            <div class="col-6 col-md-3 col-lg-2">
                <!--dataaosdisiniya-->
                <a href="food-category.html" class="component-categories d-block">
                <div class="categories-image">
                    <img src="Images/Food-category.svg" alt="" class="w-100">
                </div>
                <p class="categories-text">Foods</p>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <!--dataaosdisiniya-->
                <a href="drink-categories.html" class="component-categories d-block">
                <div class="categories-image">
                    <img src="Images/drink-categories.svg" alt="" class="w-100">
                </div>
                <p class="categories-text">Drinks</p>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <!--dataaosdisiniya-->
                <a href="snack-category.html" class="component-categories d-block">
                <div class="categories-image">
                    <img src="Images/snack-categories.svg" alt="" class="w-100">
                </div>
                <p class="categories-text">Snacks</p>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <!--dataaosdisiniya-->
                <a href="dessert-category.html" class="component-categories d-block">
                <div class="categories-image">
                    <img src="Images/dessert-categories.svg" alt="" class="w-100">
                </div>
                <p class="categories-text">Desserts</p>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <!--dataaosdisiniya-->
                <a href="other-category.html" class="component-categories d-block">
                <div class="categories-image">
                    <img src="Images/other-categories.svg" alt="" class="w-100">
                </div>
                <p class="categories-text">Others</p>
                </a>
            </div>
            </div>
        </div>
        </section>
        <section class="timeline">
        <div class="container">
            <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center mt-5 ">
                <h5><u>Timeline</u></h5>
            </div>
            </div>
            <div class="container post">
            <div class="row mt-2">
                <div class="co-2">
                <div class="container">
                    <img src="Images/logo.svg" alt="">
                </div>
                </div>
                <div class="social-profile-bg rounded-pill">
                <p>Lisa Blackpinks</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">
                <h3>Nasi Goreng Kambing Ala Lisa</h3>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="product-thumbnail">
                <div class="product-image" style="background-image: url('Images/nasi-goreng.jpg');">
                </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="container col-8">
                <div class="product-text">Nasi Goreng Kambing ini adalah makanan kesukaan suami saya, rasanya lebih gurih,
                    karena kami suka yang gurih-gurih. barangkali teman-teman mau coba, Check This Out!
                </div>
                </div>
            </div>
            <div class="row d-flex align-items-start">
                <div class="col-12">
                <div class="container likecomment">
                    <img src="Images/like.svg" alt="" class="ml-3 mt-2">
                <a href="read-more.html"> 
                    <img src="Images/comment.svg"alt="" class="ml-3 mt-2">
                </a>
                </div>
                <div class="col-lg-2 col-sm-4 button-readmore">
                    <a href="read-more.html" class="btn btn_warna btn-block mt-0 btn-sm rounded-pill">
                        Read More
                    </a>
                </div>
                </div>
                <div class="col-12 ml-3">24 Likes
                </div>
            </div>
            </div>
        </div>
        </section>
</div>
    
@endsection