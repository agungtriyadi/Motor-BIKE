@extends('main')

@section('content')

<div class="container">
	<div class="col-12">
	<div class="row">
	<!-- Slideshow container -->
		<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="{{asset('assets/image/slider1.jpg')}}" class="border-25 w-100">
    <div class="text">Harga Murah</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="{{asset('assets/image/slider2.jpg')}}" class="border-25 w-100">
    <div class="text">Kualitas Mewah</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="{{asset('assets/image/slider3.jpg')}}" class="border-25 w-100">
    <div class="text">Suasana Seperti Hotel</div>
  </div>
</div>


 
<div class="col-3">
    <form action="" method="post">
    {{csrf_field()}}
  		<div class="form-group">
    		<label for="exampleInputNumber">Email</label>
    		<input type="text" class="form-control" id="exampleInputNumber" placeholder="Email" name="email" style="width: 300px">
 		</div>

    <div class="form-group">
   			 <label for="exampleInputPassword1">Nama</label>
   			 <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Nama" name="nama" style="width: 	300px">
  	</div>
  	<div class="form-group">
    		<label for="exampleInputPassword1" >Creat Password</label>
    		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" style="width: 300px">
  	</div>  		
  	<label>Setuju syarat dan ketentuan </label> 
  	<div class="checkbox">Check me out</div>
  	<button class="btn btn-success my-2 my-sm-0" type="submit" style="margin-left: 100px">Registrasi</button>
  		
      <div class="text-muted" style="margin-left: 50px">
            <p>Sudah punya akun? </p></div>
  		</form>

            <!-- Trigger the modal with a button -->
  		<a href="" class="link" data-toggle="modal" data-target="#myModal">Masuk</a> </p>

              <!-- Modal -->
  		<div class="modal fade" id="myModal" role="dialog">
    	<div class="modal-dialog">

        
      		<!-- Modal content-->
      	<div class="modal-content">
        <div class="modal-header">
        	 <h4 class="modal-title" align="center">Log In</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body" >
          <label for="exampleInputNumber" style="margin-top: 10px">Email
    	  <input type="font-weight-normal"  class="form-control" name="email" id="email" placeholder="Input your E-mail" style="width: 300px"></label>
   		  <label for="exampleInputPassword1">Password
   		  <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" style="width: 300px"></label>
        </div>
        <div class="modal-footer">
        	<a href="./Register.html" class="btn-danger" style="padding-right: 8px; padding-left: 8px; padding-bottom: 8px; padding-top: 8px;" role="button">Batal</a>
          <button class="btn-success btnLogin" style="padding-right: 8px; padding-left: 8px; padding-bottom: 0px; padding-top: 8px;" role="button">Masuk</button>
        </div>
      </div>
        
    </div>
  </div><!--end modal-->
  <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">       
        <a href="https://www.facebook.com"> <img src="{{asset('assets/image/fb-icon.png')}}" alt="" width="40px"></a>
      </li>

      <li class="list-inline-item">
        <a href="https://accounts.google.com/ServiceLogin/signinchooser?hl=en&passive=true&continue=https%3A%2F%2Fwww.google.com%2Fsearch%3Fq%3Dlog%2Bin%2Bgoogle%26oq%3Dlog%2Bin%2Bgoogle%26aqs%3Dchrome..69i57j0l5.3954j1j4%26sourceid%3Dchrome%26ie%3DUTF-8&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><img src="{{asset('assets/image/gplus-icon.png')}}" alt="" width="40px"></a>
      </li>
    </ul>   
 	</div>
</div>
</div>
<!-- The dots/circles -->
<div style="margin-left: 400px">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
</div>
 <script>
 var _baseURL = '<?php echo url(''); ?>';
 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="x-token"]').attr('content')
    }
});
 $(function() {
   $('.btnLogin').on('click', function (e) {
     e.preventDefault();
     $.ajax({
     url: _baseURL + '/fnLogin',
     data: {
       email: $('input[name=email]').val(),
       password: $('input[name=password]').val()
     },
     type: 'post',
     dataType: 'json',
     success: function (d) {
       if (d.status == 500) {
         alert(d.message);
       } else if (d.status == 200) {
         window.location.reload();
       }
     }
   });
   })
   
 })
 </script>

 @endsection