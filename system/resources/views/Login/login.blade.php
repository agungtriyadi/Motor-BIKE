<html>
    <head>
        <title>Selamat Datang</title>
        <meta name="csrf-token" content="{{csrf_token()}}">
        <style>
        @img{
            
        }
        @font-face{
            font-family: 'bakery';
            src: url('css/login/font/krinkes.ttf');
        }
        .latar{
            width:50%;
            z-index: 1; 
            top: 0px; 
            position:relative; 
            text-align:center;
            opacity: 0.4;
            filter: alpha(opacity=40);
            
        } 
        body{
            background: linear-gradient(to top left, #0099cc 19%, #66ff99 100%);

        }
        .slideshow-container {
        width:500px;
        }
        /* The dots/bullets/indicators */
        .dot {
        height: 13px;
        width: 13px;
        margin: 0 2px;
        background-color: #bbb;
        display: inline-block;
        transition: background-color 0.6s ease;
        }
        .active {
        background-color: #717171;
        }
        /* Fading animation */
        .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
        }
        h1.icon{
            font-family:bakery;
            font-size:60px;
            letter-spacing:15px;
            padding-top:10px;
            padding-left:10px;
        }
        p{
            text-align:center;
            line-height:2;
            padding-left:10px;
        }
        .login{
            width: 20%;
            background: linear-gradient(to bottom, #66ffff 0%, #ffffff 100%);
           
            padding: 10px;
            padding-left: 5px;
            font-size: 20px;
            color:black;
            cursor: pointer;
            border-radius: 5px;
            margin-bottom: 15px;
            right:0;
        }
        .logout{
            width: 20%;
            background: linear-gradient(to bottom, #66ffff 0%, #ffffff 100%);
            margin-left:10px;
            padding: 10px;
            padding-left: 5px;
            font-size: 20px;
            color:black;
            cursor: pointer;
            border-radius: 5px;
            margin-bottom: 15px;
           
        }
        </style>
        </head>
            <body>
            <div class="" style="position:relative;">
                <div class="" style="position:absolute;top:0;left:33%;z-index:0;width:50%;padding-top:100px">
                    <img src="{{url('image/login/logo.png')}}" style="width:70%;opacity:0.5;">
                </div>
                <div style="position:relative;z-index:1;">          
                <table> <!-- ini digunakan untuk melakukan penambaha bagian pada bagian header yaitu icon dan menu menu yang ada dalam header--> 
                    <td style="width:50%">                
                        <div>
                            <img src="{{url('image/login/logo.png')}}" style="width:20%; float: left; text-align: justify">
                            <h1 class='icon' >LPM JOURNAL</h1>
                        </div>
                    </td>                           
                    <td style="width:30%">
                                         
                    </td>
                    <td valign="top" style="width:50%; padding-top:25px; ">
                        <div class="login" style="display:inline;">
                                Login
                        </div> 
                        <div style="width:10%;display:inline;">
                        </div>
                        <div class="logout" style="display:inline;">
                            Logout
                        </div>
                    </td>
                </table>
              
                <table >
                    <tr   >
                        <td style='width:auto' >
                            <div class="slideshow-container">
                                <div class="mySlides fade">
                                    <img src="{{url('image/login/img1.jpg')}}" style="width:100%; border-radius:5%">
                                </div>

                                <div class="mySlides fade">
                                    <img src="{{url('image/login/img2.jpg')}}" style="width:100%; border-radius:5%">
                                </div>

                                <div class="mySlides fade">     
                                    <img src="{{url('image/login/img3.jpg')}}" style="width:100%; border-radius:5%">
                                </div>

                                <div class="mySlides fade">     
                                    <img src="{{url('image/login/img4.jpg')}}" style="width:100%; border-radius:5%">
                                </div>

                                <div align="center" >
                                    <span class="dot"></span> 
                                    <span class="dot"></span> 
                                    <span class="dot"></span> 
                                    <span class="dot"></span>
                                </div>  
                            </div>

                        </td>
                                      
                        </td>

                        <td style="text-align:center; padding-left:10px" >
                              <p >  LPM Journal sebagai wadah bagi mahasiswa untuk terlibat dan berkecimpung dibidang jurnalistik, selain itu nantinya akan memiliki peranan ganda sebagai sebuah media informasi komunikasi.
                                Menjadi organisasi mahasiswa di bawah bendera Univ. Amikom Yogyakarta dan bergerak di bidang pers, media cetak, media online dan berbagai media lainnya.                               
                                Menjadi UKM (Unit Kegiatan Mahasiswa) yang mampu menjadi wadah bagi mahasiswa untuk mencurahkan sikap kritis serta reaktif melalui tulisan dan mengkomunikasikannya melalui media yang bertanggung jawab dan proporsional, 
                                memberi ruang bagi mahasiswa sehingga dapat mengembangkan diri guna memupuk sikap idealis, kritis, reaktif serta kreatif. menghasilkan produk di bidang media cetak yang mengandung nilai informatif dan inspiratif.                                
                                Produk berupa majalah tahunan, Buletin dwi mingguan, journalizine dan produk2 digital lainnya yang diisi dengan konten konten rubrik berbobot dan berkualitas, sehingga tulisan serta ilustrasi yang bermuatan informatif 
                                dan inspiratif mampu dimunculkan dengan kualitas yang proporsional.</p>
                                
                        </td>
                    </tr>
                </table>
            </div>
            </div>
             
            <script>
            var slideIndex = 0;
            showSlides();
            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex> slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
            </script>      
    </body>
</html>