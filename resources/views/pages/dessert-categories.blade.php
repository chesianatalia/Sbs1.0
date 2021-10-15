@extends('layouts.app')

@section('title')
    Step by Step Dessert Category
@endsection

@section('content')
  <div class="page-content dashboard">
    <div class="container">
      <div class="text-center">
        <h1 class="mb-0 title"><u>Step by Step</u></h1>
        <h4 class="mb-3">
          DESSERT<br> CATEGORY
        </h4>
      </div>
    </div>
    <section class="timeline">
      <div class="container">
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
              <a href="readmore.html"> 
                <img src="Images/comment.svg"alt="" class="ml-3 mt-2">
              </a>
              </div>
              <div class="col-lg-2 col-sm-4 button-readmore">
                  <a href=readmore.html" class="btn btn_warna btn-block mt-0 btn-sm rounded-pill">
                    Read More
                </a>
              </div>
            </div>
            <div class="col-12 ml-3">24 Likes
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="container post">
          <div class="row mt-2">
            <div class="co-2">
              <div class="container">
                  <img src="Images/logo.svg" alt="">
              </div>
            </div>
            <div class="social-profile-bg rounded-pill">
              <p>Iqbal Cjr</p>
            </div>
          </div>
          <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
              <h3>Ayam Goreng Kalasan Maknyus</h3>
            </div>
          </div>
          <div class="row d-flex justify-content-center align-items-center">
            <div class="product-thumbnail">
              <div class="product-image" style="background-image: url('Images/ayam-kalasan.jpg');">
              </div>
            </div>
          </div>
          <div class="row d-flex justify-content-center align-items-center">
            <div class="container col-8">
              <div class="product-text">Menu hari ini adalah Ayam Kalasan. Ayam Kalasan ini sangat renyah dan empuk. 
                Anggota CJR banyak yang suka ayam kalasan buatan saya. kamu mau coba juga? Yuk kepoin!
              </div>
            </div>
          </div>
          <div class="row d-flex align-items-start">
            <div class="col-12">
              <div class="container likecomment">
                <img src="Images/like.svg" alt="" class="ml-3 mt-2">
              <a href="readmore.html"> 
                <img src="Images/comment.svg"alt="" class="ml-3 mt-2">
              </a>
              </div>
              <div class="col-lg-2 col-sm-4 button-readmore">
                  <a href=readmore.html" class="btn btn_warna btn-block mt-0 btn-sm rounded-pill">
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