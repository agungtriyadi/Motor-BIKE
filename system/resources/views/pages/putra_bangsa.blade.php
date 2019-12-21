@extends('main')

@section('content')

<table width="100%" border="0">
  <tbody>
    <tr>
      <td colspan="2" align="center" bgcolor="lightblue">
      <font style="color: gray">  <h2>PUTRA BANGSA</h2></font>
      </td>
    </tr>
  <!--isi deskripsi start-->
    <tr>
      <td height="450" colspan="2" align="center">
  <!--tab foto start-->
        <div class="tab-content">
          <div class="tab-pane fade show active" id="foto" role="tabpanel" aria-labelledby="home-tab">
  <!--corausel foto start-->
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
      <!--item slider start-->
                 <img src="{{asset('assets/img/sld1/1.png')}}" height="440" width="1000" class="d-block w-100" alt="...">
                </div>
              <div class="carousel-item">
                 <img src="{{asset('assets/img/sld1/2.png')}}" height="440"  class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                 <img src="{{asset('assets/img/sld1/3.png')}}" height="440" class="d-block w-100" alt="...">
              </div>
    <!--item slider end-->
            </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
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
            <source src="{{asset('assets/vid/b.ogg')}}" type="video/ogg" />
          </video> 
        </div>
        <!--deskripsi video end-->
        <!--deskripsi map start-->
        <div role="tabpanel" class="tab-pane fade" id="lokasi">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2831031973287!2d110.4066334143565!3d-7.759770579104437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599bd3bdc4ef%3A0x6f1714b0c4544586!2sUniversitas+Amikom+Yogyakarta!5e0!3m2!1sid!2sid!4v1562469208598!5m2!1sid!2sid" width="100%" height="440" frameborder="0" style="border:0" allowfullscreen></iframe>
       </div>
       <!--deskripsi map end-->
      </td>
    </tr>
    <!--isi deskripsi end-->
	
	
    <!--nav deskripsi start-->
    <tr>
      <td colspan="2" bgcolor="lightgray">
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
      </td>
    </tr>
    <!--nav deskripsi end-->
    <!--nav fasilitas kiri start-->
    <tr>
      <td width="70%" height="50" > 
          <div>
            <ul class="nav nav-tabs justify-content-start">
              <li class="nav-item">
                 <a class="nav-link text-dark" href="#fasilitas" aria-controls="komen" role="tab" data-toggle="tab">fasilitas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#komen" aria-controls="komen" role="tab" data-toggle="tab">Komentar
                </a>
              </li>
            </ul>
          </div>  
        </td>
        <!--nav fasilitas kiri end-->






        <!--fasilitas kanan start-->
        <td align="center" class="bg-info" rowspan="2">
          <font style="color: black;: 20px">
            <h2>Data Kos</h2>
          </font> 
            <div class="container" style="padding-top: 10px;">
              <div class="card-deck mb-3 text-left">
          <div class="card mb-4 shadow-sm">
            <div>
              <img src="{{asset('assets/image/kamar1.jpg')}}" alt="" class="d-block w-100" height="250px">
            </div>
          <div class="card-body">
              <h2 class="card-title pricing-card-title">IDR. 200.000
                <small class="text-muted">/ Bulan</small></h2>
                  <ul class="list-unstyled mt-3 mb-4 text-muted">
                    <li><b class="jenis-kos">Putra</b> - Bantul</li>
                    <li type="bullet">Kost Putra Bangsa</li>
                    <li type="bullet">Wifi, Perlengkapan Tidur, Kamar Mandi...</li>
                    <li type="bullet">
                      <img src="{{asset('assets/image/small-centang.png')}}" alt="" style="width: 10px"><small> - Upload 2 minggu yang lalu</small>
                    </li>
                  </ul>
                
                        <a href="{{route('chat')}}"> <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="klik untuk menghubungi pemilik kos">
                         <font style="color: white">Hubungi Kos </font>  
                        </button>
                      </a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_tengah" data-placement="top" title="klik untuk memesan kos">
                      Pesan
                    </button>
                    <!-- MODAL PESAN-->
                    <div class="modal fade" id="modal_tengah">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            
              <!-- Ini adalah Bagian Header Modal -->
              <div class="modal-header">
                <h6 class= "modal-title text-center" >Kos Putra Bangsa</h6> 
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Ini adalah Bagian Body Modal -->
              <div class="modal-body">
                <div class="modal-body">
              <form>
                <div class="form-group">
                    <table border="0px" width="500px" class="tdl " align="center">
              <tr >
                  <td >Paket</td>
                  <td><strong>:</strong></td>
                  <td>
                      <select name="paket">
                          <option >--Pilih Paket--</option>
                          <option value="paket1" >Paket 1</option>
                          <option value="paket2">Paket 2</option>
                          <option value="paket3">Paket 3</option>
                      </select>
                  </td>
              </tr>
              <tr>
                  <td>Tanggal Pesan </td>
                  <td><strong>:</strong></td>
                  <td>
                      <input type="date" name="tgl" value="tgl">
                  </td>
              </tr>
              <tr>
                  <td>Lama Sewa</td>
                   <td><strong>:</strong></td>
                  <td>
                      <input type="Radio" name="pesan" value="Mingguan" checked="true">Mingguan
                          <select name="mingguan">
                              <option value="1minggu" >1</option>
                              <option value="2minggu">2</option>
                              <option value="3minggu">3</option>
                          </select>
                      <br>
                      <input type="Radio" name="pesan" value="Bulanan">Bulanan
                      <br>
                      <input type="Radio" name="pesan" value="Tahunan">Tahunan
                  </td>
              </tr>
              <tr>
                  <td>Total Harga</td>
                  <td><strong>:</strong></td>
                  <td>Rp.------</td>
              </tr>
              <tr >
                  <td colspan="3" align="center"> 
                      <input type="CheckBox" name="setuju"> Setuju Dengan Syarat?
                  </td>
              </tr>
             
          </table>
            </div>
              </div>
              
              <!-- Ini adalah Bagian Footer Modal -->
              <div class="modal-footer">
                    <button   data-toggle="modal" data-target="#myModal" style="width: 80px;"" type="button" class="btn btn-primary">Pesan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
              
            </div>
          </div>
        </div>
        
      </div>
                  </div>
                </div>
              </div>
          
      </td>
    </tr>





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