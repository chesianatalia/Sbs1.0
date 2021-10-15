@extends('layouts.app')

@section('title')
    Step by Step Profile
@endsection

@section('content')
  <div class="page-auth">
    <div class="container">
      <div class="text-center">
        <h1 class="mb-0 title"><u>Step by Step</u></h1>
        <p class="mb-5">
          No one is born a great cook, one learns by doing -Julia Child
        </p>
      </div>
    </div>
    <div class="section-store-auth">
      <div class="container">
        <div class="row row-login justify-content-center">
          <img src="Images/logo-test.png" alt="">
        </div>
        <h2 class="text-center"><u>Profile</u></h2>
        <form action="" class="mt-3">
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="FirstName" placeholder="First Name" class="form-control" />
            </div>
            <div class="form-group col-md-6">
              <input type="lastname" placeholder="Last Name" class="form-control" />
            </div>
          </div>
          <div class="form-group">
            <input type="Username" placeholder="Username" class="form-control" />
          </div>
          <div class="form-group">
            <input type="Email" placeholder="Email Address" class="form-control" />
          </div>
          <div class="form-group">
            <input type="Password" placeholder="Password" class="form-control" />
          </div>
          <div class="form-group">
            <input type="date" placeholder="Birth Date" class="form-control" />
            <label for="">Gender</label>
            <div class="form-row justify-content-between">
              <div class="form-group">
                <input id="image" type="file" name="profile_photo" placeholder="Profile Picture" class="form-control"
                  required="" capture>
                />
              </div>
            </div>
            <a href="dashboard.html" class="btn btn_warna btn-block mt-4">
              Save
            </a>
        </form>
        <div class="container mt-5">
        <div class="container post">
          <div class="row mt-2">
            <div class="co-2">
              <div class="container">
                  <img src="Images/logo.svg" alt="">
              </div>
            </div>
            <div class="social-profile-bg rounded-pill">
              <p>Chesia Natalia</p>
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
                  <a href="add-menu.html" class="btn btn_warna btn-block mt-0 btn-sm rounded-pill">
                    Edit
                </a>
              </div>
            </div>
            <div class="col-12 ml-3">24 Likes
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
    
@endsection