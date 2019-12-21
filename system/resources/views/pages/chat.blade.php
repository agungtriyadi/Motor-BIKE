@extends('main')
@section('content')

       
<table width="100%" class="border-success" >
  <tr>
    <td width="25" class="border-right">
    <div class="alert alert-secondary" role="alert">
 <a data-toggle="modal" data-target="#profil"> <img src="{{asset('assets/img/1.png')}}" width="40" class="rounded-circle"> 

 </a>
<!-- Modal -->
<div class="modal fade" id="profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yoga pratama</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" align="center">
        <img src="{{asset('assets/img/1.png')}}" width="150" class="rounded-circle"> 
         <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Ganti foto profil</label>
  </div>
      </div>
      
    </div>
  </div>
</div>


 <div class="dropdown float-right">
  
    <img src="{{asset('assets/img/more.png')}}" class="btn btn-light dropdown-toggle rounded-circle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  width="40" height="40"> 
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Pengaturan</a>
    <a class="dropdown-item" href="#">Pilih chat</a>
    <a class="dropdown-item" href="#">Keluar</a>
  </div>
</div>
</div>
 
            </td>
<td rowspan="2" class="align-top">
 
        <div class="tab-content " id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-bangsa" role="tabpanel" aria-labelledby="v-pills-bangsa-tab">
 <div class="alert alert-secondary" role="alert">
  <div class="dropleft align-top float-right" >
  
    <img src="{{asset('assets/img/more.png')}}" class="btn btn-light dropdown-toggle rounded-circle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  width="50" height="50"> 
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Laporkan</a>
    <a class="dropdown-item" href="#">Blokir </a>
    <a class="dropdown-item" href="#">Hapus percakapan</a>
  </div>
</div>
 <a data-toggle="modal" data-target="#bangsamodal"class="text-dark"><img src="{{asset('assets/img/kamar1.jpg')}}" width="50" height="50" class="rounded-circle float-left mr-md-3">
      Kos putra bangsa <br>
      <small>terakhir online 1 jam lalu</small> </a>

    </div>
<!-- Modal bangsa -->
<div class="modal fade" id="bangsamodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kos Putra bangsa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" align="center">
        <img src="{{asset('assets/img/kamar1.jpg')}}" width="450" height="300"> 
         <br><br>
         <a href="{{route('putra_bangsa')}}"><button type="button" class="float-center btn-info btn-lg">Kunjungi</button>
</a>
      </div>
      
    </div>
  </div>
</div>

<div class="p-3 mb-2 col-3 mr-md-auto bg-info text-white rounded-lg float-right">
      Apa ada kos kosong?
</div><br><br>
<div class="p-3 mb-2 bg-secondary text-white rounded-lg float-left">
      iya ada yang kosong
</div>
    </div>
      <div class="tab-pane fade" id="v-pills-losmen" role="tabpanel" aria-labelledby="v-pills-losmen-tab"> 
      <div class="alert alert-secondary" role="alert">
        <div class="dropleft align-top float-right" >
  
    <img src="{{asset('assets/img/more.png')}}" class="btn btn-light dropdown-toggle rounded-circle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  width="50" height="50"> 
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Laporkan</a>
    <a class="dropdown-item" href="#">Blokir </a>
    <a class="dropdown-item" href="#">Hapus percakapan</a>
  </div>
</div>
        <a data-toggle="modal" data-target="#modallosmen" class="text-dark"><img src="img/kamar2.jpg"width="50" height="50" class="rounded-circle float-left mr-md-3">
          Losmen bikin enak <br>
          <small> terakhir online 15 menit lalu     </small>
       </a> 
     </div>
       <!-- Modal bangsa -->
<div class="modal fade" id="modallosmen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Losmen bikin enak</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" align="center">
        <img src="{{asset('assets/img/kamar2.jpg')}}" width="450" height="300"> 
         <br><br>
         <a href="{{route('losmen')}}"><button type="button" class="float-center btn-info btn-lg">Kunjungi</button>
</a>
      </div>
      
    </div>
  </div>
</div>

<div class="p-3 mb-2 col-2 mr-md-auto bg-info text-white rounded-lg float-right">
      hai?
</div><br><br>
<div class="p-3 mb-2 col-2 bg-secondary text-white rounded-lg align-items-start">
      hai juga
</div>
<div class="p-3 mb-2 col-2 bg-secondary text-white rounded-lg float-left">
      iya silahkan.
</div>
        </div>
      <div class="tab-pane fade" id="v-pills-puri" role="tabpanel" aria-labelledby="v-pills-puri-tab"> <div class="alert alert-secondary" role="alert">
        <div class="dropleft align-top float-right" >
  
    <img src="{{asset('assets/img/more.png')}}" class="btn btn-light dropdown-toggle rounded-circle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  width="50" height="50"> 
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Laporkan</a>
    <a class="dropdown-item" href="#">Blokir </a>
    <a class="dropdown-item" href="#">Hapus percakapan</a>
  </div>
</div>
       <a data-toggle="modal" data-target="#modalpuri" class="text-dark"><img src="{{asset('assets/img/kamar3.jpg')}}" width="50" height="50" class="rounded-circle float-left mr-md-3">
      Kos puri asih <br>
      <small>terakhir online 6 jam lalu</small> </a>

    </div>
<!-- Modal bangsa -->
<div class="modal fade" id="modalpuri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kos puri asih</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" align="center">
        <img src="{{asset('assets/img/kamar3.jpg')}}" width="450" height="300"> 
         <br><br>
         <a href="{{route('putra_bangsa')}}"><button type="button" class="float-center btn-info btn-lg">Kunjungi</button>
</a>
      </div>
      
    </div>
  </div>
</div><div class="p-3 mb-2 col-1 mr-md-auto bg-info text-white rounded-lg float-right">
      P
</div><br><br>
<div class="p-3 mb-2 col-1 bg-secondary text-white rounded-lg align-items-start">
      P
</div>
<div class="p-3 mb-2 col-1 bg-secondary text-white rounded-lg align-items-start">
      P
</div> 
<div class="p-3 mb-2 col-1 bg-secondary text-white rounded-lg float-left">
      P
</div>

</div>
    </div>
  </div>



</td>
  </tr>
  <tr> 
    <td width="25%" class="border-right">
     <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Cari percakapan" aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary btn-info text-white" type="button" id="button-addon2">></button>
  </div>
</div>
</div>
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active text-dark" id="v-pills-bangsa-tab" data-toggle="pill" href="#v-pills-bangsa" role="tab" aria-controls="v-pills-bangsa" aria-selected="true">
        <div> 
          <img src="{{asset('assets/img/kamar1.jpg')}}" width="50" height="50" class="rounded-circle float-left mr-md-3">
          Kos putra bangsa <span class="float-right"> <small> 17.52</small></span> <br>
          <small> iya ada yang kosong 
                      <span class="badge badge-success float-right">1</span>
         </small>
          
        </div>
      </a>
   <span class="border-bottom"> </span>
      <a class="nav-link text-dark" id="v-pills-losmen-tab" data-toggle="pill" href="#v-pills-losmen" role="tab" aria-controls="v-pills-losmen" aria-selected="false">
        <div> 
          <img src="{{asset('assets/img/kamar2.jpg')}}"width="50" height="50" class="rounded-circle float-left mr-md-3">
          Losmen bikin enak <span class="float-right"> <small> 17.52</small></span> <br>
          <small> iya silahkan. 
            <span class="badge badge-success float-right">2</span>
         </small>
     
        </div></a>
        <span class="border-bottom"> </span>
      <a class="nav-link text-dark" id="v-pills-puri-tab" data-toggle="pill" href="#v-pills-puri" role="tab" aria-controls="v-pills-puri" aria-selected="false">
      <div> 
          <img src="{{asset('assets/img/kamar3.jpg')}}" width="50" height="50" class="rounded-circle float-left mr-md-3">
          Kos puri asih <span class="float-right"> <small> 17.52</small></span> <br> 
       <small> P 
            <span class="badge badge-success float-right" class="justify-content-end">3</span>
         </small>
          </div>
           </div></a>
     <span class="border-bottom"> </span>
    </div>
  </div>
  </div>
  
     
  
</div>
</td>

  </tr>
  <tr>
    <td height="180" class="border">    </td>
    <td class="align-bottom"> <div class="input-group mb-3">
        <div class="dropup">
  
    <img src="{{asset('assets/img/lamp.jpg')}}" class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  width="60" height="40"> 
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#"><img src="{{asset('assets/img/foto.png')}}" width="40"> foto</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#"><img src="{{asset('assets/img/video.png')}}" width="40"> video </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#"><img src="{{asset('assets/img/audio.png')}}" width="40"> audio</a>
  </div>
</div>
  <input type="text" class="form-control" placeholder="Ketik disini" aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary btn-info text-white" type="button" id="button-addon2">kirim</button>
  </div>
</div>
</div></td>
     
  </tr>
</table>



@endsection