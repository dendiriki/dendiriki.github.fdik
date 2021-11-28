<?php
    require 'function.php';
    $databerita = query("SELECT * FROM databerita ORDER BY id DESC");

     //pagination
    //konfigurasi
    $jumlahdataperhalaman = 3;
    $jumlahdata = count(query("SELECT * FROM databerita"));
    $jumlahhalaman =ceil($jumlahdata / $jumlahdataperhalaman) ;
    // $halamanaktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1; ini cara if elase yang baru
    if(isset($_GET["halaman"])){
        $halamanaktif = $_GET["halaman"];
    }else{
        $halamanaktif = 1;
    }
    $awaldata = ($jumlahdataperhalaman * $halamanaktif) - $jumlahdataperhalaman ;

    $databerita = query("SELECT * FROM databerita LIMIT $awaldata, $jumlahdataperhalaman ");

   
   
?>

<!doctype html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fakultas Desain dan Industri Kreatif</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- ThemeFisher Icon -->
    <link rel="stylesheet" href="plugins/themefisher-fonts/themefisher-fonts.css">
    <!-- Light Box -->
    <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
    <!-- animation css -->
    <link rel="stylesheet" href="plugins/animate/animate.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="plugins/slick/slick.css">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleaku.css">

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map_canvas {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
    </style>
    <script src="plugins/modernizr.min.js"></script>
  </head>
  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <!-- Loader to display before content Load-->
  <div class="loading">

    <!-- <img src="img/loader.gif" alt=""> -->

    <div class="windows8 loading-position">
      <div class="wBall" id="wBall_1">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_2">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_3">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_4">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_5">
        <div class="wInnerBall"></div>
      </div>
    </div>
  </div> 


<section class="page-header services-header" data-parallax="scroll" data-image-src="images/berita.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center warna" >Berita & Artikel</h1>
      </div>
    </div>
  </div>
</section>

 <!-- Navigation -section
  =========================-->
<nav class="navbar navbar-fixed-top navigation" >
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo" >
        <img src="images/fff.png" alt="">
      </a>
      <a class="navbar-brand navbar-tengah logo" >
        <img src="images/logo-dinamika1.png" alt="">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse ">
      <ul class="nav navbar-nav navbar-right menu">
        <li><a href="index.html">Home</a></li>
        <li><a href="profil.html">profil</a></li>
        <li><a href="#" class="dropdown cklts dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">Prodi</a>
          <ul class="dropdown-menu cklt" aria-labelledby="dropdownMenu1">
            <li><a href="s1dkv.html">S1 DESAIN KOMUNIKASI VISUAL</a></li>
            <li><a href="s1dp.html">S1 DESAIN PRODUK</a></li>
            <li><a href="divpfdt.html">DIV PRODUKSI FILM DAN TELEVISI</a></li>
        </ul></li>
        <li><a href="blog1.php">Berita & Artikel</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
  
  <!-- Blog Sections 
  =========================-->
  <section class="case-study">
    <div class="container">
      <div class="row">
        <div class="title text-center">
          <h2>Berita & Artikel</h2>
        </div>
        <div class="col-md-10">
          <!-- Blog Left Sections 
          =========================-->

            <!-- If you use to 1 by 1 section to blog content left or right use class
              blog content left is default but you use blog content right side 
              you mast use class="blog-content-right" class with blog-list-section div
             -->
            <!-- Blog List Only Image
            ========================= -->
          
            <?php $i=1; ?>
            <?php foreach($databerita as $row): ?>
            <?php if($i % 2 == 0): ?>  
              <br><br><br><br>
            <div class="blog-list-section blog-content-center row">
              <div class="col-md-10 blog-content-area">
                <div class="blog-img">
                  <img class="img-responsive" src="images/upload/<?php echo $row["gambar"]; ?>"  alt="">      
                </div>
                <div class="blog-content">
                  <a href="blog-single1.html"><h4 class="blog-title"><br/> <?php echo $row ["namaberita"]; ?> </h4></a>
                  <div class="sub-judul">
                    <div class="date">
                      <p><?php echo $row ["tanggal"] ?></p>
                    </div>
                    <div class="author">
                      <p><?php echo $row ["penulis"]; ?></p>
                    </div>
                  </div>
                  <p class="blog-decisions"><?php echo $row ["deskripsi"]; ?></p>
                
                  <a class="btn btn-default th-btn solid-btn" href="blog-single1.php?id=<?php echo $row["id"];?>" role="button">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>  

            

           
            <?php else: ?>
            <!--coba list-->
            <br><br><br><br>
            <div class="blog-list-section blog-content-left row">
              <div class="col-md-10 blog-content-area">
                <div class="blog-img">
                  <img class="img-responsive" src="images/upload/<?php echo $row["gambar"]; ?>" alt="">      
                </div>
                <div class="blog-content">
                  <a href="blog-single2.html"><h4 class="blog-title"><br/> <?php echo $row ["namaberita"]; ?></h4></a>
                  <div class="sub-judul">
                    <div class="date">
                      <p><?php echo $row ["tanggal"] ?></p>
                    </div>
                    <div class="author">
                      <p><?php echo $row ["penulis"]; ?></p>
                    </div>
                  </div>
                  <p class="blog-decisions"><?php echo $row ["deskripsi"]; ?></p>
                  <a class="btn btn-default th-btn solid-btn" href="blog-single1.php?id=<?php echo $row["id"];?>" role="button">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>  
            <?php endif; ?>
            <?php $i++; ?>
            <?php endforeach; ?>

    <!--        <div class="blog-list-section blog-content-right row">
              <div class="col-md-9 blog-content-area">
                <div class="blog-img">
                  <img class="img-responsive" src="images/blog/blog-img1.jpg" alt="">      
                </div>
                <div class="blog-content">
                  <a href="blog-single3.html"><h4 class="blog-title">TIGA . <br /> Good Bars,Benefit of the t Media Elite</h4></a>
                  <div class="meta">
                    <div class="date">
                      <p>22<sup>nd</sup>Jan 2016</p>
                    </div>
                    <div class="author">
                      <p>By Michal Lomans</p>
                    </div>
                  </div>
                  <p class="blog-decisions">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonum euismod tincidunt ut laoreet dolore magna autem vel eum iriure dolor in.</p>
                  <a class="btn btn-default th-btn solid-btn" href="blog-single3.html" role="button">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>   -->

            <!-- Blog List Slider Image
            ========================= -->
            <!-- <div class="blog-list-section blog-content-left row">
              <div class="col-md-9 blog-content-area"> -->
                <!-- Blog slider -->
                <!-- <div id="blog-slider" class="blog-slider">
                  <div class="item">
                    <div class="blog-img">
                      <img class="img-responsive" src="images/blog/blog-img2.jpg" alt="">
                    </div>
                  </div>
                  <div class="item">
                    <div class="blog-img">
                      <img class="img-responsive" src="images/blog/blog-img1.jpg" alt="">
                    </div>
                  </div>
                  <div class="item">
                    <div class="blog-img">
                      <img class="img-responsive" src="images/blog/blog-img3.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="blog-content">
                  <a href="blog-single.html"><h4 class="blog-title">A Complete, Ranke Destinat Moines’ <br /> Good Bars.</h4></a>
                  <div class="meta">
                    <div class="date">
                      <p>22<sup>nd</sup>Jan 2016</p>
                    </div>
                    <div class="author">
                      <p>By Michal Lomans</p>
                    </div>
                  </div>
                  <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonum euismod tincidunt ut laoreet dolore magna autem vel eum iriure dolor in.</p>
                  <a class="btn btn-default th-btn solid-btn" href="blog-single.html" role="button">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>   -->
            
              <!-- Blog List Video Image
              ========================= -->
            <!-- <div class="blog-list-section row">
              <div class="col-md-9 blog-content-area">
                <div class="video-section">
                  <img class="img-responsive" src="images/blog/blog-img3.jpg" alt="">
                  <div class="video-overlay">
                    <a id="th-video" class="th-video" href="blog-single.html"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
                  </div>
                </div>
                <div class="blog-content">
                  <a href="blog-single.html"><h4 class="blog-title">A Complete, Ranke Destinat Moines’ <br /> Good Bars,Benefit of the t Media Elite</h4></a>
                  <div class="meta">
                    <div class="date">
                      <p>22<sup>nd</sup>Jan 2016</p>
                    </div>
                    <div class="author">
                      <p>By Michal Lomans</p>
                    </div>
                  </div>
                  <p class="blog-decisions">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonum euismod tincidunt ut laoreet dolore magna autem vel eum iriure dolor in.</p>
                  <a class="btn btn-default th-btn solid-btn" href="blog-single.html" role="button">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div> -->

          <!-- See All Post -->
          <!-- <div class="col-md-12">
            <div role="navigation">
                <h1 id="tulis">Page navigation</h1>
                <table>
                  <tbody>
                    <tr>
                      <td><a aria-label="Page 1" class="fl" href="blog1.html">1</a></td>
                      <td> </td>
                      <td> </td>
                      <td><a aria-label="Page 2" class="fl" href="blog2.html">2</a></td>
                      <td> </td>
                      <td> </td>
                      <td><a aria-label="Page 3" class="fl" href="blog3.html">3</a></td>
                      <td><a aria-label="Page 4" class="fl" href="blog4.html">4</a></td>
                      <td><a aria-label="Page 5" class="fl" href="blog5.html">5</a></td>
                      <td><a aria-label="Page 6" class="fl" href="blog6.html">6</a></td>
                      <td><a aria-label="Page 7" class="fl" href="blog7.html">7</a></td>
                      <td><a aria-label="Page 8" class="fl" href="blog8.html">8</a></td>
                      <td><a aria-label="Page 9" class="fl" href="blog9.html">9</a></td>
                      <td><a aria-label="Page 10" class="fl" href="blog10.html">10</a></td>
                    </tr>
                  </tbody>
                </table>
            </div>
          </div> -->

          <!--coba link-->
          <div class="alink ">
          <?php for($i = 1; $i <= $jumlahhalaman; $i++) : ?>
          <?php if( $i == $halamanaktif): ?>
          <a href="?halaman=<?php echo $i; ?>" style="font-weight: bold; color: red;"><?php echo $i; ?></a>
          <?php else: ?>
          <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
          <?php endif; ?>
          <?php endfor; ?>
          </div>
        </div>
        <div class="col-md-3">
          <!-- Blog Right Sections 
          =========================-->
          	<div class="blog-sidbar">
		
		<!-- <div class="categories widgets">
			<div class="list-group text-center">
				<div class="list-group-item active"> Blog Categories </div>
				<a href="#" class="list-group-item">Web Design</a>
				<a href="#" class="list-group-item">User Interface</a>
				<a href="#" class="list-group-item">User Experience</a>
				<a href="#" class="list-group-item">Typography</a>
				<a href="#" class="list-group-item">Color Sense</a>
				<a href="#" class="list-group-item">Future Trend</a>
				<a href="#" class="list-group-item">Modern Design</a>
			</div>
		</div>
	 -->

      </div>
    </div>
  </section>

  <!-- ini untuk bug peta-->
  
  
    <!-- batas peta -->
    <section class="case-study ">
    <div class="case-study-content" >
      <div class="container">
        <div class="row">
          <div class="col-md-1">

          </div>
          <div class="col-md-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.3764412226733!2d112.78024511420475!3d-7.311538773916203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7faec95555555%3A0xf13eec4465c5a263!2sUniversitas%20Dinamika!5e0!3m2!1sid!2sid!4v1634656155399!5m2!1sid!2sid" width="375" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="col-md-1">

          </div>
          <div class="col-md-4">
            <div class="content">
              <div class="row">
                <div class="col-md-12">
                  <h4 class="text-center tulisan-case">About
                    <br><br><br>
                  </h4>
                  <p class="tulisan-case deskripsi">Universitas Dinamika adalah sebuah perguruan tinggi swasta berbasis teknologi 
                    yang terletak di Kota Surabaya, Jawa Timur. Sebelum berganti nama, dahulunya Universitas Dinamika bernama Institut Bisnis dan Informatika Stikom Surabaya. </p>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <p><br><br><br></p>
                  </div>
                </div>
              </div>
              </div>
              
              
              
              <div class="content">
                <div class="row">
                  <div class="col-md-3">
                    <p class="tulisan-case">Alamat </p>
                  </div>
                   <div class="col-md-9">
                    <p class="tulisan-case"> Jln Raya Kedung Baruk 98 Surabaya</p>
                  </div>
                
                 
                  
      
                   <!-- <p class="tulisan-case">Jl. Raya Kedung Baruk No.98, Kedung Baruk, Kec. Rungkut, Kota SBY, Jawa Timur 60298
                    <br><br>
                    Contact us : 0813-3185-0498 / Pak. Karsam
                    <br><br>
                    Write us : karsam@dinamika.ac.id
                  </p>  -->
                </div>
                
      
                <div class="content">
                  <div class="row">
                    <div class="col-md-3">
                      <p class="tulisan-case">Contact </p>
                    </div>
                     <div class="col-md-9">
                      <p class="tulisan-case">0813-3185-0498 / Pak. Karsam
                      </p>
                    </div>
                  </div>
              </div>
      
              <div class="row">
                <div class="col-md-3">
                  <p class="tulisan-case">Write us </p>
                </div>
                <div class="col-md-9">
                  <p class="tulisan-case">karsam@dinamika.ac.id</p>
                </div>
              </div>
          </div>
          </div>
          <div class="col-md-2">

          </div>
        </div>
      </div>
    </div>
  </section>


  
  <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="footer-top">
                        <!-- <div class="col-md-2"> -->
                            <!-- footer About section
                            ========================== -->
                            <!-- <div class="footer-about">
                                <h3 class="footer-title">About</h3>
                                <p>Nemo enim ipsam voluptatem quia voluptas <br>
                                    sit aspernatur aut odit aut fugit, sed quia <br>
                                    magni dolores eos qui ratione. ed quia <br>
                                    magni dolores</p>
                            </div>
                        </div> -->
                        <!-- <div class="col-md-2"> -->
                            <!-- footer Address section
                            ========================== -->
                            <!-- <div class="footer-address">
                                <h3 class="footer-title">Address</h3>
                                <p>Jl. Raya Kedung Baruk No.98, Kedung Baruk, Kec. Rungkut, Kota SBY, Jawa Timur 60298</p>
                                <p class="contact-address">
                                    Contact us : 0813-3185-0498 / Pak. Karsam</a> <br>
                                    Write us : karsam@dinamika.ac.id</a>
                                </p>
                            </div>
                        </div> -->
                        <div class="col-md-3">
                            <!-- footer Media link section
                            ========================== -->
                            <div class="footer-address contact-address">
                                <h3 class="footer-title">FAKULTAS TEKNOLOGI DAN INFORMATIKA</h3>
                                  <p ><a href="https://www.dinamika.ac.id/read/fti/37/s1-teknik-komputer">S1 Teknik Komputer</a></p>
                                  <p><a href="https://www.dinamika.ac.id/read/fti/35/s1-sistem-informasi">S1 Sistem Informasi</a></p>
                                  <p><a href="https://www.dinamika.ac.id/read/fti/31/diii-sistem-informasi">DIII Sistem Informasi</a></p>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                          <!-- footer Media link section
                          ========================== -->
                          <div class="footer-address contact-address">
                              <h3 class="footer-title">FAKULTAS EKONOMI DAN BISNIS</h3>
                               <p><a href="https://www.dinamika.ac.id/read/feb/1000/s1-manajemen">S1 Manajemen</a> </p> 
                               <p><a href="https://www.dinamika.ac.id/read/feb/36/s1-akuntansi">S1 Akuntansi</a> </p> 
                                <p><a href="https://www.dinamika.ac.id/read/feb/14/diii-administrasi-perkantoran">DIII Administrasi Perkantoran</a> </p> 
                          </div>
                        </div>
                        <div class="col-md-3">
                          <!-- footer Media link section
                          ========================== -->
                          <div class="footer-address contact-address">
                              <h3 class="footer-title">FAKULTAS DESAIN DAN INDUSTRI KREATIF</h3>
                                  <p><a href="https://www.dinamika.ac.id/read/fti/167/s1-desain-komunikasi-visual">S1 Desain Komunikasi Visual</a></p>
                                  <p><a href="https://www.dinamika.ac.id/read/fti/1001/s1-desain-produk">S1 Desain Produk</a></p>
                                  <p><a href="https://www.dinamika.ac.id/read/fti/33/div-produksi-film-dan-televisi">DIV Produksi Film dan Televisi</a></p>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <!-- footer Media link section
                          ========================== -->
                          <div class="footer-social-media">
                              <h3 class="footer-title">
                                <img src="images/logo-dinamika1.png" alt="">
                              </h3>
                              <ul class="footer-media-link">
                                  <li><a href="https://www.facebook.com/universitasdinamika/"><i class="tf-ion-social-facebook" aria-hidden="true"></i></a></li>
                                  <li><a href="https://twitter.com/undikasurabaya/"><i class="tf-ion-social-twitter" aria-hidden="true"></i></a></li>
                                  <!-- <li><a href="#"><i class="tf-ion-social-linkedin-outline"
                                              aria-hidden="true"></i></a></li> -->
                                  <li><a href="https://www.dinamika.ac.id/"><i class="tf-ion-social-google-outline" aria-hidden="true"></i></a>
                                  </li>
                                  <li><a href="https://www.instagram.com/universitasdinamika/"><i class="tf-ion-social-instagram-outline"
                                              aria-hidden="true"></i></a></li>
                              </ul>
                          </div>
                        </div>
                    </div>
                    <!-- <div class="footer-nav text-center">
                        <div class="col-md-12">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="text-center">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>&copy; 2021 Universitas Dinamika<br>
                                    Design and Developed By <a href="https://www.instagram.com/dendiriki123/"> Dendi Riki Rahmawan</a> & <a href="https://www.instagram.com/mardika_akbarahma/">Mardika Akbarahma</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="plugins/jquery.min.js"></script>

    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="plugins/slick/slick.min.js"></script>
    <!-- filter -->
    <script src="plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- Lightbox -->
    <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Parallax -->
    <script src="plugins/parallax.min.js"></script>
    <!-- Video -->
    <script src="plugins/jquery.vide.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="plugins/google-map/gmap.js"></script>

    <script src="js/script.js"></script>
    </body>

    </html>