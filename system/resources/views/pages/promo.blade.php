@extends('main')

@section('content')

    <div class="container">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner"  style="border-radius:50px">
                
              @foreach($image as $data)
                        @if($data->id == 1)
                            <div class="carousel-item active">
                                <!--item slider start-->
                                <img class="d-block w-100 " src="{{asset('assets/motor/beranda/' . $data->beranda_image)}}" alt="First slide">
                            </div>
                        @else
                            <div class="carousel-item">
                                <img class="d-block w-100"src="{{asset('assets/motor/beranda/' . $data->beranda_image)}}" alt="...">
                            </div>
                        @endif
                  @endforeach
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

    </div>
    <!-- Slider End 

          

    <!-- Middle Content Start -->
   
    <!-- Middle Content End
        @foreach($promo as $prom)
            {{$prom->motor['idmotor']}}
        @endforeach
    <!--Ending Content Start -->
      <div class="text-center" style="padding-top: 10px; padding-left:50px;padding-right:80px;">       
        <div class="card-deck mb-4 text-left">
          <div class="card-columns">
              @foreach($promo as $dataPromo)
                      <div class="card center">
                        <img class="card-img-top" src="{{asset('assets/motor/motor/' . $dataPromo->motor['imgmtr'])}}"  alt="Card image cap">
                          <div class="card-body">
                                    <h2 class="card-title text-muted">IDR. <span style="text-decoration: line-through">{{$dataPromo->motor['hargaMtr']}}</span></small></h2>
                                    <h4 class="card-title pricing-card-title">Promo : IDR. {{$dataPromo->hargaPromo}}</h4>
                                    <ul class="list-unstyled mt-3 mb-4 text-muted">
                                        <li><b class="jenis-kos">Plat</b> <b>{{$dataPromo->motor['platMtr']}}</b></li>
                                        <li type="bullet">{{$dataPromo->motor['keteranganMtr']}}</li>
                                        <li type="bullet"><img src="{{asset('assets/image/small-centang.png')}}" alt="" style="width: 10px"><small> - Update {{$dataPromo->updated_at}}</small></li>
                                    </ul>
                                    <button type="button" class="btn btn-lg btn-block btn-outline-primary" >Telusuri</button>
                          </div>
                      </div>
              @endforeach
        </div>

      </div>
    </div> 
    <hr>

  
@endsection