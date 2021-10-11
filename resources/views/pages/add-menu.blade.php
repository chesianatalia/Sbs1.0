@extends('layouts.app')

@section('title')
    Step by Step Add Recipe 
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
                <h2 class="text-center"><u>Add New Recipe</u></h2>
                <form action="" class="mt-3" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <input type="Title" placeholder="Title of Your Recipe" class="form-control" />
                    </div>
                    <div class="form-group">
                        <textarea rows="4" cols="50" name="comment" placeholder="Description"
                        class="form-control"></textarea>
                    </div>
                    <div class="form-group"> Your Final Result Picture
                        <input id="image" type="file" name="profile_photo" placeholder="Profile Picture" class="form-control"
                        required="" capture />
                    </div>
                    <div class="form-group"> Category
                        <select name="category" class="form-control">
                        <option value="food">Food</option>
                        <option value="drink">Drink</option>
                        <option value="snack">Snack</option>
                        <option value="dessert">Dessert</option>
                        <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <h2>Materials</h2>
                        <input type="text" placeholder="1/2 kg bawang putih" class="form-control" />
                        <div class="row col-lg-2">
                        <a href="#" class="btn btn_warna btn-block mt-4">
                        + Add More
                        </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <h2>Step by Step</h2>
                        <input type="text" placeholder="Pertama cuci bawang terlebih dahulu" class="form-control" />
                        <input id="image" type="file" name="profile_photo" placeholder="Profile Picture" class="form-control mt-1"
                        required="" capture />
                        <div class="row col-lg-2">
                        <a href="#" class="btn btn_warna btn-block mt-4">
                        + Add More
                        </a>
                        </div>
                    </div>
                    <a href="dashboard.html" class="btn btn_warna btn-block mt-4">
                        Upload
                    </a>
                    </form>
                
            </div>
        </div>
  </div>
    
@endsection