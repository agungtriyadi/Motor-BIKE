
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
            <source src="vid/b.mp4" type="video/mp4" />
            <source src="vid/b.ogg" type="video/ogg" />
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