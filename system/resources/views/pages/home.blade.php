@extends('main')

@section('content')
<!-- Slider Start -->
<nav class="nav">
        <div class="col">
            <div class="carousel-item active">
              <img src="{{asset('assets/image/slider.1.jpg')}}" class="border-25 w-100" alt="..." >
              <div class="carousel-caption d-none d-md-block">
                <div class="text-light">
                  <h2 class="display-2 font-weight-lighter">Motor Bike</h2>
                  <p>Mulai Pencarian dan Beli Sekarang</p> 
                </div>
                <div>
                  <form class="my-2 my-lg-0">
                      <div class="form-group mb-2">
                        <input class="form-control mr-sm-2 " type="search" placeholder="Cari nama kos / daerah" aria-label="Search">
                      </div>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Pencarian</button>
                  </form>
                </div>
                  
              </div>
            </div>
        </div> 
    </nav>
    <!-- Slider End -->



    <!-- Middle Content Start -->
    <div class="container" style="align-content: center; text-align: center">
          <h3 style="text-align: center; padding-top: 20px;">Khusus Untuk Member Motor Bike</h3>
          <div class="text-muted">
            <p><a href="{{route('login')}}">Masuk</a> atau <a href="{{route('registrasi')}}">Registrasi</a></p>
          </div>
      </div>
    <div class="row" style="text-align: center">
      <div class="col">
          <img src="{{asset('assets/image/caution.png')}}" alt="" style="width: 100px; height: 100px">
          <h5>Laporan Pelanggaran</h5>
      </div>
      <div class="col">
          <img src="{{asset('assets/image/discount.png')}}" alt="" style="width: 100px; height: 100px">
          <h5>Kartu Diskon</h5>
      </div>
      <div class="col">
          <img src="{{asset('assets/image/saved-list.png')}}" alt="" style="width: 100px; height: 100px">
          <h5>Daftar Simpanan</h5>
      </div>
      <div class="col">
          <img src="{{asset('assets/image/riwayat.png')}}" alt="" style="width: 100px; height: 100px">
          <h5>Riwayat Transaksi</h5>
      </div>
    </div>
    <!-- Middle Content End -->



    <!--Ending Content Start -->
    <div class="container" style="padding-top: 20px; padding-bottom: 20">
      <hr>
    </div>
    
            <div class="row justify-content-end">
                    <div class="col-md-12  col-md-7 oflow-hidden" style="height: auto; position: relative; z-index: 1" >

                      <div class="row justify-content-center" style="position: relative; z-index: 1; cursor: all-scroll;" >
                        
                        <div class="swiper-scrollbar"></div> 

                        <div class="col-md-10">

                          <h5 class="color-white" style="margin-bottom:20px;"><b style="color: black">TERLARIS</b></h5>

                          <div class="swiper-container oflow-visible" data-slide-effect="slide" data-autoheight="false" 
                              data-swiper-speed="900" data-swiper-margin="25" data-swiper-slides-per-view="4"
                              data-swiper-breakpoints="true" data-scrollbar="true" data-swiper-loop="false"
                              data-swpr-responsive="[1, 2, 2, 2]">
                          
                            <div class="swiper-wrapper">

                                          <div class="swiper-slide">
                                              <div class="card mb-4 border-25">
                                                  <div>
                                                    <img src="{{asset('assets/image/kamar1.jpg')}}" alt="" class="d-block w-100" height="150px">
                                                  </div>
                                                  <div class="card-body">
                                                    <h2 class="card-title pricing-card-title">IDR. 200.000 <small class="text-muted">/ Bulan</small></h2>
                                                    <ul class="list-unstyled mt-3 mb-4 text-muted">
                                                        <li><b class="jenis-kos">Putra</b> - Bantul</li>
                                                        <li type="bullet">Kost Putra Bangsa</li>
                                                        <li type="bullet">Wifi, Perlengkapan Tidur, Kamar Mandi...</li>
                                                        <li type="bullet"><img src="{{asset('assets/image/small-centang.png')}}" alt="" style="width: 10px"><small> - Upload 2 minggu yang lalu</small></li>
                                                      </ul>
                                                      <a href="{{route('putra_bangsa')}}">
                                                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Telusuri</button>
                                                      </a>
                                                  </div>
                                                </div>
                                          </div> <!-- swiper-slide -->


                                          <div class="swiper-slide">
                                                    <div class="card border-25">
                                                        <div>
                                                            <img src="{{asset('assets/image/kamar2.jpg')}}" alt="" class="d-block w-100" height="150px">
                                                        </div>
                                                      <div class="card-body">
                                                        <h2 class="card-title pricing-card-title">IDR. 50.000 <small class="text-muted">/ Bulan</small></h2>
                                                        <ul class="list-unstyled mt-3 mb-4 text-muted">
                                                      <li><b class="jenis-kos">Perempuan</b> - Sleman</li>
                                                      <li type="bullet">Losmen Bikin enak</li>
                                                      <li type="bullet">Wifi, Perlengkapan Tidur, Kamar Mandi...</li>
                                                      <li type="bullet"><img src="{{asset('assets/image/small-centang.png')}}" alt="" style="width: 10px"><small> - Upload 2 minggu yang lalu</small></li>
                                                    </ul>
                                                        <div class="row align-items-end">
                                                          <div class="col">
                                                          <a href="{{route('losmen')}}">
                                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Telusuri</button>
                                                          </a>
                                                          </div>                      
                                                        </div>
                                                      </div>
                                                    </div>
                                            </div><!-- swiper-slide -->


                                            <div class="swiper-slide">                                                                  
                                                    <div class="card mb-4 border-25">
                                                      <div class="row">
                                                        <div class="col">
                                                            <img src="{{asset('assets/image/kamar3.jpg')}}" alt="" class="d-block w-100" height="150px" style="align-content: center">
                                                        </div>
                                                      </div>
                                                        
                                                      <div class="card-body"> 
                                                        <h2 class="card-title pricing-card-title">IDR. 350.000 <small class="text-muted">/ Bulan</small></h2>
                                                        <ul class="list-unstyled mt-3 mb-4 text-muted">
                                                            <li><b class="jenis-kos">Perempuan</b> - Sleman</li>
                                                            <li type="bullet">Kost Puri Asih</li>
                                                            <li type="bullet">Wifi, Perlengkapan Tidur, Kamar Mandi...</li>
                                                            <li type="bullet"><img src="{{asset('assets/image/small-centang.png')}}" alt="" style="width: 10px"><small> - Upload 2 minggu yang lalu</small></li>
                                                          </ul>
                                                          <a href="{{route('puri_asih')}}">
                                                              <button type="button" class="btn btn-lg btn-block btn-outline-primary">Telusuri</button>
                                                          </a>
                                                      </div>
                                                    </div>                                    
                                            </div><!-- swiper-slide -->

                                            <div class="swiper-slide">
                                                <div class="card mb-4 shadow-sm border-25">
                                                    <div>
                                                        <img src="{{asset('assets/image/kamar4.jpg')}}" alt="" class="d-block w-100" height="150px">
                                                    </div>
                                                  <div class="card-body">
                                                    <h2 class="card-title pricing-card-title">IDR. 350.000 <small class="text-muted">/ Bulan</small></h2>
                                                    <ul class="list-unstyled mt-3 mb-4 text-muted">
                                                      <li><b class="jenis-kos">Perempuan</b> - Sleman</li>
                                                      <li type="bullet">Kost Ashiap</li>
                                                      <li type="bullet">Wifi, Perlengkapan Tidur, Kamar Mandi...</li>
                                                      <li type="bullet"><img src="{{asset('assets/image/small-centang.png')}}" alt="" style="width: 10px"><small> - Upload 2 minggu yang lalu</small></li>
                                                    </ul>
                                                    <div class="row align-items-end">
                                                      <div class="col">
                                                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Telusuri</button>
                                                      </div>                      
                                                    </div>
                                                  </div>
                                                </div>
                                            </div><!-- swiper-slide -->

                                            <div class="swiper-slide">
                                                <div class="card mb-4 shadow-sm border-25">
                                                    <div>
                                                        <img src="{{asset('assets/image/kamar5.jpg')}}" alt="" class="d-block w-100" height="150px">
                                                    </div>
                                                  <div class="card-body">
                                                    <h2 class="card-title pricing-card-title">IDR. 950.000 <small class="text-muted">/ Bulan</small></h2>
                                                    <ul class="list-unstyled mt-3 mb-4 text-muted">
                                                      <li><b class="jenis-kos">Perempuan</b> - Sleman</li>
                                                      <li type="bullet">Kost Pratama</li>
                                                      <li type="bullet">Wifi, Perlengkapan Tidur, Kamar Mandi...</li>
                                                      <li type="bullet"><img src="{{asset('assets/image/small-centang.png')}}" alt="" style="width: 10px"><small> - Upload 2 minggu yang lalu</small></li>
                                                    </ul>
                                                    <div class="row align-items-end">
                                                      <div class="col">
                                                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Telusuri</button>
                                                      </div>                      
                                                    </div>
                                                  </div>
                                                </div>
                                            </div><!-- swiper-slide -->

                                            <div class="swiper-slide">
                                                <div class="card mb-4 shadow-sm border-25">
                                                    <div>
                                                        <img src="{{asset('assets/image/kamar6.jpg')}}" alt="" class="d-block w-100" height="150px">
                                                    </div>
                                                  <div class="card-body">
                                                    <h2 class="card-title pricing-card-title">IDR. 750.000 <small class="text-muted">/ Bulan</small></h2>
                                                    <ul class="list-unstyled mt-3 mb-4 text-muted">
                                                      <li><b class="jenis-kos">Perempuan</b> - Sleman</li>
                                                      <li type="bullet">Kost Artipange</li>
                                                      <li type="bullet">Wifi, Perlengkapan Tidur, Kamar Mandi...</li>
                                                      <li type="bullet"><img src="{{asset('assets/image/small-centang.png')}}" alt="" style="width: 10px"><small> - Upload 2 minggu yang lalu</small></li>
                                                    </ul>
                                                    <div class="row align-items-end">
                                                      <div class="col">
                                                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Telusuri</button>
                                                      </div>                      
                                                    </div>
                                                  </div>
                                                </div>
                                            </div><!-- swiper-slide -->

                                            <div class="swiper-slide">                                                                  
                                              <div class="card mb-4 border-25">
                                                <div class="row">
                                                  <div class="col">
                                                      <img src="{{asset('assets/image/kamar7.jpg')}}" alt="" class="d-block w-100" height="150px" style="align-content: center">
                                                  </div>
                                                </div>
                                                  
                                                <div class="card-body"> 
                                                  <h2 class="card-title pricing-card-title">IDR. 350.000 <small class="text-muted">/ Bulan</small></h2>
                                                  <ul class="list-unstyled mt-3 mb-4 text-muted">
                                                      <li><b class="jenis-kos">Perempuan</b> - Sleman</li>
                                                      <li type="bullet">Kost Ngestu</li>
                                                      <li type="bullet">Wifi, Perlengkapan Tidur, Kamar Mandi...</li>
                                                      <li type="bullet"><img src="{{asset('assets/image/small-centang.png')}}" alt="" style="width: 10px"><small> - Upload 2 minggu yang lalu</small></li>
                                                    </ul>
                                                  <button type="button" class="btn btn-lg btn-block btn-outline-primary">Telusuri</button>
                                                </div>
                                              </div>                                    
                                      </div><!-- swiper-slide -->

                                      <div class="swiper-slide">                                                                  
                                                    <div class="card mb-4 border-25">
                                                      <div class="row">
                                                        <div class="col">
                                                            <img src="{{asset('assets/image/kamar8.png')}}" alt="" class="d-block w-100" height="150px" style="align-content: center">
                                                        </div>
                                                      </div>
                                                        
                                                      <div class="card-body"> 
                                                        <h2 class="card-title pricing-card-title">IDR. 350.000 <small class="text-muted">/ Bulan</small></h2>
                                                        <ul class="list-unstyled mt-3 mb-4 text-muted">
                                                            <li><b class="jenis-kos">Perempuan</b> - Sleman</li>
                                                            <li type="bullet">Kost Podomoro</li>
                                                            <li type="bullet">Wifi, Perlengkapan Tidur, Kamar Mandi...</li>
                                                            <li type="bullet"><img src="{{asset('assets/image/small-centang.png')}}" alt="" style="width: 10px"><small> - Upload 2 minggu yang lalu</small></li>
                                                          </ul>
                                                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Telusuri</button>
                                                      </div>
                                                    </div>                                    
                                            </div><!-- swiper-slide -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>

    <!-- Middle Footer Start -->
      <Div class="container">
        <div class="row text-center"><H3>Kenapa Harus Memilih Impian Kos?</H3></div>
        <div class="row justify-content-start">
            <div class="col-2,5">
               <img src="{{asset('assets/image/love-icon.png')}}" alt="" class="d-block" width="150px">
            </div>
            <div class="col-6" style="padding-top:50px">
              <h5>Harga Sesuai Hati</h5>
              <p class="text-justify">Dengan menggunakan Impian Kos anda dapat memilih harga dan tempat sesuai dengan yang anda butuhkan.</p>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-6 text-right ">
              <h5>Kemudahan Bertransaksi</h5>
              <p class="text-justify">Anda tidak perlu datang ke Tempat penyewaan, akan tetapi anda bisa melakukan transaksi langsung melalu Impian Kos sehingga memudahkan anda dalam melakukan pemesanan dan pembayaran.</p>
            </div>
            <div class="col-3">
                <img src="{{asset('assets/image/transaction-icon.png')}}" alt="" class="d-block" width="150px" height="">
            </div>
        </div>
        <div class="row justify-content-start">
          <div class="col-2,5">
             <img src="{{asset('assets/image/discount.png')}}" alt="" class="d-block" width="150px">
          </div>
          <div class="col-6" style="padding-top:50px">
            <h5>Diskon Terbaik</h5>
            <p class="text-justify">Kerja sama yang kami jalin dengan pemilik kos dapat memuculkan potongan harga yang tebaik</p>
          </div>
        </div>
        <div class="row justify-content-end" style="padding-bottom: 50px;">
          <div class="col-6 text-right" style="padding-top: 30px;">
            <h5>Kemudahan Bertransaksi</h5>
            <p class="text-justify">Anda tidak perlu datang ke Tempat penyewaan, akan tetapi anda bisa melakukan transaksi langsung melalu Impian Kos sehingga memudahkan anda dalam melakukan pemesanan dan pembayaran.</p>
          </div>
          <div class="col-3">
              <img src="{{asset('assets/image/security-icon.png')}}" alt="" class="d-block" width="150px" height="">
          </div>
        </div>
      </Div>        
    <!-- Middle Footer End-->

@endsection