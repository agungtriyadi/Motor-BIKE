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
    <!-- Slider End 

          

    <!-- Middle Content Start -->
   
    <!-- Middle Content End -->
        @foreach($promo as $prom)
            {{$prom->motor}}
        @endforeach
    <!--Ending Content Start -->
      <div class="container" style="padding-top: 10px;">       
        <div class="card-deck mb-4 text-left">
          <div class="card-columns">
              @foreach($data as $datamotor)
                      <div class="card">
                        <img class="card-img-top" src="{{asset('assets/motor/motor/' . $datamotor->imgmtr)}}" alt="Card image cap">
                        <div class="card-body">
                                  <h2 class="card-title text-muted">harga <small class="text-muted">/ Bulan</small></h2>
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
              @endforeach
        </div>

      </div>
    </div> 
    <hr>

  
@endsection