@extends('main')

@section('content')

      
    <div class="container" style="padding-top: 20px; padding-bottom: 20">
      <hr>
    </div>

    
            <div class="row justify-content-end">
            <div class="container" style="padding-top: 10px;">       
        <div class="card-deck mb-4 text-left">
          <div class="card-columns">
                            @foreach($data as $dataonderdil)

                            <div class="card center">
                                              <div class="card mb-4 border-25">
                                                  <div class="card-img-top">
                                                      <img src="{{asset('assets/motor/Onderdil/' . $dataonderdil->imgOnderdil)}}" alt="" class="d-block w-100" height="150px">
                                                  </div>
                                                  <div class="card-body">
                                                    <h2 class="card-title pricing-card-title">Rp. {{number_format($dataonderdil->hargaOnderdil)}},-<small class="text-muted">/ Pcs</small></h2>
                                                    <ul class="list-unstyled mt-3 mb-4 text-muted">
                                                        <li><b class="jenis-kos">{{$dataonderdil->namaOnderdil}}</b></li>
                                                        <li type="bullet"><img src="{{asset('assets/image/small-centang.png')}}" alt="" style="width: 10px"><small> - Upload 2 minggu yang lalu</small></li>
                                                      </ul>
                                                      <a href="#">
                                                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Telusuri</button>
                                                      </a>
                                                  </div>
                                                </div>
                                          </div> <!-- swiper-slide -->                                    
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>

             
    <hr>

  
@endsection