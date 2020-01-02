@extends('main')

@section('content')

    
      <div class="mx-auto text-center">
          <font  style="color: gray;"><h2><b>Hurley Ultra Limited Edition</b> </h2></font>
      </div>
      
      <div class="tab-content container">
          <div class="tab-pane fade show active" id="foto" role="tabpanel" aria-labelledby="home-tab">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">

                            @foreach($data as $data)

                              @if($data->id_ImgMtr == 1)
                                  <div class="carousel-item active">
                                      <!--item slider start-->
                                      <img src="{{asset('assets/motor/motor/motor1/' . $data->image_tambahan)}}" height="440" class="d-block mx-auto" alt="...">
                                  </div>
                              @else
                                  <div class="carousel-item">
                                      <img src="{{asset('assets/motor/motor/motor1/' . $data->image_tambahan)}}" height="440" class="d-block mx-auto" alt="...">
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
            <!--end corausel-->
            <!--start deskripsi video-->
          <div role="tabpanel" class="tab-pane fade" id="video"> 
            <video controls="controls" width="100%" height="440">
              <source src="{{asset('assets/vid/b.mp4')}}" type="video/mp4" />              
            </video> 
          </div>
            <!--deskripsi video end-->
            <!--deskripsi map start-->
          <div role="tabpanel" class="tab-pane fade" id="lokasi">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2831031973287!2d110.4066334143565!3d-7.759770579104437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599bd3bdc4ef%3A0x6f1714b0c4544586!2sUniversitas+Amikom+Yogyakarta!5e0!3m2!1sid!2sid!4v1562469208598!5m2!1sid!2sid" width="100%" height="440" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
       <!--deskripsi map end-->

    <!--isi deskripsi end-->

    <!--nav deskripsi start-->
            <div align="center">
              <ul class="nav nav-tabs justify-content-start" >
                <li class="nav-item">
                  <a class="nav-link text-success" href="#foto" aria-controls="home" role="tab" data-toggle="tab"><img src="{{asset('assets/img/foto.png')}}" width="30"> 
                      <br> Foto
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-success" href="#video" aria-controls="komen" role="tab" data-toggle="tab"> 
                    <img src="{{asset('assets/img/video.png')}}" width="30">
                      <br> Video
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-success" href="#lokasi" aria-controls="komen" role="tab" data-toggle="tab">
                    <img src="{{asset('assets/img/Lokasi.png')}}" width="30">
                      <br>Lokasi
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-success" href="#simpan" aria-controls="komen" role="tab" data-toggle="tab">
                    <img src="{{asset('assets/img/love.png')}}" width="30">
                    <br>simpan
                  </a>
                </li>
              </ul>
            </div>
    <!--nav deskripsi end-->
      </div>

<div style="padding-left:20px; padding-top:20px">
    <div class="col-sm-8 "> 
              

    </div>
    <div class="col-sm-4">
          <div class="card mb-4 border-25 center">
                  <div>
                    <img src="{{asset('assets/motor/motor/ultra1.jpg')}}" alt="" class="d-block w-100" height="150px">
                  </div>
                  <div class="card-body">
                    <h2 class="card-title pricing-card-title"></h2>
                    <ul class="list-unstyled mt-3 mb-4 text-muted">
                        <li><b class="jenis-kos"></b></li>
                        <li type="bullet">Nama Motor</li>
                        <li type="bullet">Keterangan Motor</li>
                        <li type="bullet"><img src="{{asset('assets/image/small-centang.png')}}" alt="" style="width: 10px;"><small> - Upload 2 minggu yang lalu</small></li>
                      </ul>
                      <a href="#">
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Telusuri</button>
                      </a>
                  </div>
                </div>
          </div>    
       
    </div>  
</div>

    <tr>
      <td height="38" >
        <div style="padding-left: 10px">
          <div class="tab-content">
            <div class="tab-pane fade bg-white show active" id="fasilitas" role="tabpanel" aria-labelledby="home-tab">

<table width="100%" border="0" class="table-striped bg-light">
  <tbody>
    <tr>
      <td colspan="4" height="70" style="border-">Fasilitas Kos</td>
    </tr>
    <tr>
      <td> <img src="{{asset('assets/img/fs/ukuran.svg')}}" width="40px"> luas kamar 3x3</td>
      <td> <img src="{{asset('assets/img/fs/kunci.png')}}" width="40px"> kunci kamar</td>
      <td> <img src="{{asset('assets/img/fs/penjaga.png')}}" width="40px"> Penjaga kos</td>
      <td> </td>
    </tr>
    <tr>
      <td colspan="4" height="70"> Fasilitas Kamar</td>
    </tr>
    <tr>
      <td><img src="{{asset('assets/img/fs/kasur.png')}}" width="40px"> kasur
   </td>
      <td><img src="{{asset('assets/img/fs/tv.png')}}" width="40px">TV</td>
      <td> <img src="{{asset('assets/img/fs/lemari.png')}}" width="40px"> Almari pakaian</td>
      <td><img src="{{asset('assets/img/fs/wifi.png')}}" width="40px"> wifi dan internet </td>
    </tr>
    <tr>
      <td colspan="4" height="70">Fasilitas bersama</td>
    </tr>
    <tr>
      <td> <img src="{{asset('assets/img/fs/km.png')}}" width="40px"> Kamar mandi luar</td>
      <td> <img src="{{asset('assets/img/fs/motor.png')}}" width="40px"> Tempat parkir motor</td>
      <td><img src="{{asset('assets/img/fs/sepeda.png')}}" width="40px"> Tempat parkir sepeda</td>
      <td> <img src="{{asset('assets/img/fs/dapur.png')}}" width="40px"> Dapur  </td>
    </tr>
    <tr>
      <td colspan="4" height="70">Area sekitar </td>
    </tr>
    <tr>
      <td> <img src="{{asset('assets/img/fs/mall.png')}}" width="40px"> Minimarket</td>
      <td><img src="{{asset('assets/img/fs/warung.png')}}" width="40px">Toko kelontong</td>
      <td>
    <img src="{{asset('assets/img/fs/rm.png')}}" width="40px"> Rumah makan</td>
      <td><img src="{{asset('assets/img/fs/mushola.png')}}" width="40px"> Masjid </td>
    </tr>
 
    <tr><td colspan="4" height="80"></td></tr>  </tbody>
</table>  
  <hr>     
    </div>
     <div class="tab-pane fade show" id="komen" role="tabpanel" aria-labelledby="home-tab"><hr>
        <p><h5>Naruto  <img src="{{asset('assets/img/3s.png')}}" width="150" height="30"> </h5> Wow Kosan ini bagus sekali <br>
          <small> <font color="gray">5 Mei 2019</font></small>
        </p> 
      <hr>
        <p><h5>Nurhadi<img src="{{asset('assets/img/4s.png')}}" width="150" height="30"> </h5> Wow Kosan ini bagus sekali <br>
          <small> <font color="gray">5 April 2019</font></small>
        </p> 
      <hr>
        <p><h5>Thor  <img src="{{asset('assets/img/45s.png')}}" width="150" height="30"> </h5> Wow Kosan ini bagus sekali <br>
          <small> <font color="gray">5 Mei 2019</font></small>
        </p> 
      <hr>
        <p><h5>Robert dawney Jr  <img src="{{asset('assets/img/45s.png')}}" width="150" height="30"> </h5> Wow Kosan ini bagus sekali <br>
          <small> <font color="gray">5 Mei 2019</font> </small>
        </p>
        <br> 
      <hr>
        </div>
       </div>
      </div>
    </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    </tr>
  </tbody>
</table>

@endsection