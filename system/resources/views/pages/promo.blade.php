@extends('main')

@section('content')


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{asset('assets/image/slider.11.jpg')}}" alt="First slide">
        </div>
        
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('assets/image/slider.12.jpg')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('assets/image/slider.13.jpg')}}" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Slider End -->



    <!-- Middle Content Start -->
   
    <!-- Middle Content End -->



    <!--Ending Content Start -->
        <div class="container" style="padding-top: 30px;">
          <div class="text-muted col">
            <h4>Nikmati Promo Murah Impian Kos Bulan ini</h4>
          </div>
          <div class="container" style="padding-top: 10px;">
              <div class="card-deck mb-3 text-left">
                <div class="card mb-4 shadow-sm">
                  <div>
                    <img src="{{asset('assets/image/kamar1.jpg')}}" alt="" class="d-block w-100" height="250px">
                  </div>
                  <div class="card-body">
                    <h2 class="card-title text-muted"><strike>IDR. 700.000</strike> <small class="text-muted">/ Bulan</small></h2>
                    <h4 class="card-title pricing-card-title">Promo : IDR. 550.000 <small class="text-muted">/ Bulan</small></h4>
                    <ul class="list-unstyled mt-3 mb-4 text-muted">
                        <li><b class="jenis-kos">Putra</b> - Bantul</li>
                        <li type="bullet">Kost Putra Bangsa</li>
                        <li type="bullet">Wifi, Perlengkapan Tidur, Kamar Mandi...</li>
                        <li type="bullet"><img src="{{asset('assets/image/small-centang.png')}}" alt="" style="width: 10px"><small> - Update 1 hari yang lalu</small></li>
                      </ul>
                      <a href="{{route('putra_bangsa')}}">
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Telusuri</button>
                      </a>
                  </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div>
                        <img src="{{asset('assets/image/kamar2.jpg')}}" alt="" class="d-block w-100" height="250px">
                    </div>
                  <div class="card-body">
                    <h2 class="card-title text-muted"><strike>IDR. 500.000</strike> <small class="text-muted">/ Bulan</small></h2>
                    <h4 class="card-title pricing-card-title">Promo : IDR. 200.000 <small class="text-muted">/ Bulan</small></h4>
                    <ul class="list-unstyled mt-3 mb-4 text-muted">
                      <li><b class="jenis-kos">Campur</b> - Kota Yogyakarta</li>
                      <li type="bullet">Losmen Bikin Enak</li>
                      <li type="bullet">Wifi, Perlengkapan Tidur, Kamar Mandi...</li>
                      <li type="bullet"><img src="{{asset('assets/image/small-centang.png')}}" alt="" style="width: 10px"><small> - Update 1 hari yang lalu</small></li>
                    </ul>
                    <div class="row align-items-end">
                      <a href="{{route('losmen')}}">
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Telusuri</button>
                      </a>                      
                    </div>
                  </div>
                </div>
                <div class="card mb-4">
                    <div>
                        <img src="{{asset('assets/image/kamar3.jpg')}}" alt="" class="d-block w-100" height="250px">
                    </div>
                  <div class="card-body"> 
                    <h2 class="card-title text-muted"><strike>IDR. 1.200.000</strike> <small class="text-muted">/ Bulan</small></h2>
                    <h5 class="card-title pricing-card-title">Promo : IDR. 1.199.000 <small class="text-muted">/ Bulan</small></h5>
                    <ul class="list-unstyled mt-3 mb-4 text-muted">
                        <li><b class="jenis-kos">Perempuan</b> - Sleman</li>
                        <li type="bullet">Kost Puri Asih</li>
                        <li type="bullet">Wifi, Perlengkapan Tidur, Kamar Mandi...</li>
                        <li type="bullet"><img src="{{asset('assets/image/small-centang.png')}}" alt="" style="width: 10px"><small> - Update 1 hari yang lalu</small></li>
                      </ul>
                      <a href="{{route('puri_asih')}}">
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Telusuri</button>
                      </a>
                  </div>
                </div>
              </div>            
        </div>
        <hr>
      </div>
      <div class="container" style="padding-top: 10px;">
        <div class="card-deck mb-3 text-left">
          <div class="card mb-4 shadow-sm">
            <div>
              <img src="{{asset('assets/image/kamar1.jpg')}}" alt="" class="d-block w-100" height="250px">
            </div>
            <div class="card-body">
              <h2 class="card-title text-muted"><strike>IDR. 700.000</strike> <small class="text-muted">/ Bulan</small></h2>
              <h4 class="card-title pricing-card-title">Promo : IDR. 550.000 <small class="text-muted">/ Bulan</small></h4>
              <ul class="list-unstyled mt-3 mb-4 text-muted">
                  <li><b class="jenis-kos">Putra</b> - Bantul</li>
                  <li type="bullet">Kost Putra Bangsa</li>
                  <li type="bullet">Wifi, Perlengkapan Tidur, Kamar Mandi...</li>
                  <li type="bullet"><img src="{{asset('assets/image/small-centang.png')}}" alt="" style="width: 10px"><small> - Update 1 hari yang lalu</small></li>
                </ul>
              <button type="button" class="btn btn-lg btn-block btn-outline-primary">Telusuri</button>
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
              <div>
                  <img src="{{asset('assets/image/kamar2.jpg')}}" alt="" class="d-block w-100" height="250px">
              </div>
            <div class="card-body">
              <h2 class="card-title text-muted"><strike>IDR. 500.000</strike> <small class="text-muted">/ Bulan</small></h2>
              <h4 class="card-title pricing-card-title">Promo : IDR. 200.000 <small class="text-muted">/ Bulan</small></h4>
              <ul class="list-unstyled mt-3 mb-4 text-muted">
                <li><b class="jenis-kos">Campur</b> - Kota Yogyakarta</li>
                <li type="bullet">Losmen Bikin Enak</li>
                <li type="bullet">Wifi, Perlengkapan Tidur, Kamar Mandi...</li>
                <li type="bullet"><img src="{{asset('assets/image/small-centang.png')}}" alt="" style="width: 10px"><small> - Update 1 hari yang lalu</small></li>
              </ul>
              <div class="row align-items-end">
                <div class="col">
                  <button type="button" class="btn btn-lg btn-block btn-outline-primary">Telusuri</button>
                </div>                      
              </div>
            </div>
          </div>
          <div class="card mb-4">
              <div>
                  <img src="{{asset('assets/image/kamar3.jpg')}}" alt="" class="d-block w-100" height="250px">
              </div>
            <div class="card-body"> 
              <h2 class="card-title text-muted"><strike>IDR. 1.200.000</strike> <small class="text-muted">/ Bulan</small></h2>
              <h5 class="card-title pricing-card-title">Promo : IDR. 1.199.000 <small class="text-muted">/ Bulan</small></h5>
              <ul class="list-unstyled mt-3 mb-4 text-muted">
                  <li><b class="jenis-kos">Perempuan</b> - Sleman</li>
                  <li type="bullet">Kost Puri Asih</li>
                  <li type="bullet">Wifi, Perlengkapan Tidur, Kamar Mandi...</li>
                  <li type="bullet"><img src="{{asset('assets/image/small-centang.png')}}" alt="" style="width: 10px"><small> - Update 1 hari yang lalu</small></li>
                </ul>
              <button type="button" class="btn btn-lg btn-block btn-outline-primary">Telusuri</button>
            </div>
          </div>
        </div>            
  </div>
  <hr>
</div>

@endsection