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
                  <img src= "{{ asset('/Images/logo.svg') }}" alt="">
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
              <div class="product-image" style="background-image: url({{ asset('Images/nasi-goreng.jpg') }});">
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
          <div class="row mt-5 mb-5">
            <div class="col-6">
              <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                  <h3>Materials</h3>
                </div>
                <div class="container text-decoration-materials">
                  <div class="ml-3">
                    <a href="https://www.tokopedia.com/juragansembako/beras-topi-koki-pandan-wangi-5kg?src=topads">
                      1 Piring nasi putih
                    </a>
                  </div>
                  <div class="ml-3">
                    <a href="https://www.tokopedia.com/frozzy-1/gula-pasir-rose-brand-hijau-1-kg?src=topads">
                      1/4 kg daging kambing
                    </a>
                  </div>
                  <div class="ml-3">
                    <a href="https://www.tokopedia.com/frozzy-1/gula-pasir-rose-brand-hijau-1-kg?src=topads">
                      2 biji kemiri
                    </a>
                  </div>
                  <div class="ml-3">
                    <a href="https://www.tokopedia.com/frozzy-1/gula-pasir-rose-brand-hijau-1-kg?src=topads">
                      5 siung bawang putih
                    </a>
                  </div>
                   <div class="ml-3">
                    <a href="https://www.tokopedia.com/frozzy-1/gula-pasir-rose-brand-hijau-1-kg?src=topads">
                      1/2 sdm merica
                    </a>
                  </div>
                  <div class="ml-3">
                    <a href="https://www.tokopedia.com/frozzy-1/gula-pasir-rose-brand-hijau-1-kg?src=topads">
                      5 cabe kriting
                    </a>
                  </div>
                  <div class="ml-3">
                    <a href="https://www.tokopedia.com/frozzy-1/gula-pasir-rose-brand-hijau-1-kg?src=topads">
                      1 ruas kunyit
                    </a>
                  </div>
                  <div class="ml-3">
                    <a href="https://www.tokopedia.com/frozzy-1/gula-pasir-rose-brand-hijau-1-kg?src=topads">
                      1 ruas jahe
                    </a>
                  </div>
                  <div class="ml-3">
                    <a href="https://www.tokopedia.com/frozzy-1/gula-pasir-rose-brand-hijau-1-kg?src=topads">
                      2 batang serei
                    </a>
                  </div>
                  <div class="ml-3">
                    <a href="https://www.tokopedia.com/frozzy-1/gula-pasir-rose-brand-hijau-1-kg?src=topads">
                      3 lembar daun salam
                    </a>
                  </div>
                  <div class="ml-3">
                    <a href="https://www.tokopedia.com/frozzy-1/gula-pasir-rose-brand-hijau-1-kg?src=topads">
                      penyedap rasa/royco
                    </a>
                  </div>
                  <div class="ml-3">
                    <a href="https://www.tokopedia.com/frozzy-1/gula-pasir-rose-brand-hijau-1-kg?src=topads">
                      2 sdm garam halus
                    </a>
                  </div>
                   <div class="ml-3">
                    <a href="https://www.tokopedia.com/frozzy-1/gula-pasir-rose-brand-hijau-1-kg?src=topads">
                      2 sdm kecap manis
                    </a>
                  </div>
                  <div class="ml-3">
                    <a href="https://www.tokopedia.com/frozzy-1/gula-pasir-rose-brand-hijau-1-kg?src=topads">
                      secukupnya minyak goreng
                    </a>
                  </div>
                  <div class="ml-3">
                    <a href="https://www.tokopedia.com/frozzy-1/gula-pasir-rose-brand-hijau-1-kg?src=topads">
                      secukupnya air putih
                    </a>
                  </div>
                  <div class="ml-3">
                    <a href="https://www.tokopedia.com/frozzy-1/gula-pasir-rose-brand-hijau-1-kg?src=topads">
                      wortel, selada, dan bawang goreng
                    </a>
                  </div>
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
                <div class="ml-3 mb-2">
                  1. Cuci bersih daging kambing lalu potong dadu 
                </div>
                <div class="ml-3 mb-2">
                  2. Haluskan semua bumbu lalu tumis sampai harum, Masukkan daun salam dan serei geprek kemudian masukkan daging kambing dan aduk rata 
                  <div class="post-thumbnail">
                    <div class="post-pic" style="background-image: url({{ asset('Images/nasi-goreng1.jpg') }});">
                    </div>
                  </div>
                </div>
                <div class="ml-3 mb-2">
                  3. Tambahkan penyedap rasa dan garam kemudian masukkan nasi serta kecap manis.
                  <div class="post-thumbnail">
                    <div class="post-pic" style="background-image: url({{ asset('Images/nasi-goreng2.jpg') }});">
                    </div>
                  </div>
                </div>
                <div class="ml-3 mb-2">
                  4. Aduk rata. Cek rasa, lalu tuang ke dalam piring. Sajikan dengan selada, wortel dan taburi bawang goreng. Enjoy
                  <div class="post-thumbnail">
                    <div class="post-pic" style="background-image: url({{ asset('Images/nasi-goreng.jpg') }});">
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          <div class="row d-flex align-items-start">
            <div class="col-12">
              <div class="container likecomment">
               <img src= "{{ asset('/Images/like.svg') }}" alt="" class="ml-3 mt-2">
              <a href="#comment"> 
                <img src= "{{ asset('/Images/comment.svg') }}" alt="" class="ml-3 mt-2">
              </a>
              </div>
            </div>
            <div class="col-12 ml-3">24 Likes
            </div>
          </div>
          <div class="row mt-2" id="comment">
            <div class="co-2">
              <div class="container">
                  <img src= "{{ asset('/Images/logo.svg') }}" alt="">
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
                  <img src= "{{ asset('/Images/logo.svg') }}" alt="">
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
                  <img src= "{{ asset('/Images/logo.svg') }}" alt="">
              </div>
            </div>
            <div class="col-lg-6 col-md-6"> 
              <form action="" class="mt-3">
                <div class="form-group col-12">
                  <input type="Text" placeholder="Add a comment as chesianatalia..." class="form-control" />
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