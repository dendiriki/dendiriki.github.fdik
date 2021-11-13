<?php
    require 'function.php';
   

    //ambil data di url
$id = $_GET["id"];

//query data mahasiswa berdasarkan id 
$databerita = query("SELECT * FROM databerita WHERE id = $id");

   
   
?>

<!doctype html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fiction Multipage Bootstrap Template</title>
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
        <h1 class="text-center">Our Blogs. <br> We Ensure Quality Design.</h1>
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
      <a class="navbar-brand logo" href="index.html">
        <img src="images/logo-dinamika1.png" alt="">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right menu">
        <li><a href="index.html">Home</a></li>
        <li><a href="profil.html">profil</a></li>
        <li><a href="blog1.php">Berita & Artikel</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
  
  <!-- Blog Sections 
  =========================-->

  
  <section class="blog-single">
  	<div class="container">
  		<div class="row">
      <?php $i=1; ?>
      <?php foreach($databerita as $row): ?>
        <input type="hidden" name="id" value="<?php echo $databerita["id"]?>">
        <input type="hidden" name="gambarlama" value="<?php echo $databerita["gambar"]?>">
        <div class="title text-center">
          <h2><?php echo $row ["namaberita"]; ?></h2>
        </div>
  			<div class="col-md-12">
				  <!-- Blog Left Sections 
				  =========================-->
            <!-- Single Blog Page Main Img
            ============================== -->
            <div class="blog-single-section-img">
              <img src="images/upload/<?php echo $row["gambar"]; ?>" alt="Blog Single Img">
            </div>
            <!-- Single Blog Page Main Content
            ================================== -->
            <div class="blog-single-content">
              <div class="blog-content-description">
                <h3><a class="blog-content-title" ><?php echo $row["namaberita"]; ?></a></h3>
                <div class="meta">
                  <div class="date">
                    <p><?php echo $row ["tanggal"] ?></p>
                  </div>
                  <div class="author">
                    <p><?php echo $row ["penulis"]; ?></p>
                  </div>
                </div>
             
              <div class="blog-content-description">

                <p class="blog-description"><?php echo $row ["isiberita"]; ?></p>
              </div>
              

              <?php $i++; ?>
              <?php endforeach; ?>
          
            <!-- Single Blog Page Form
            ================================== -->
            <!-- <div class="blog-single-form">
              <form>
                <div class="form-group col-md-6 padding-0">
                  <input type="text" class="form-control blog-form-input" placeholder="Your Name">
                </div>
                <div class="form-group col-md-6 padding-0 padding-left-15">
                  <input type="email" class="form-control blog-form-input" placeholder="Your Email">
                </div>
                <div class="form-group col-md-12 padding-0">
                  <textarea class="form-control blog-form-textarea" placeholder="Your Comment"></textarea>
                </div>
                <div class="col-md-12 padding-0">
                  <div class="form-submit-btn text-center">
                    <button type="submit" class="btn btn-default btn-main th-btn">Submit Comment</button>
                  </div>
                </div>
              </form>
            </div> -->
          <!-- See All Post -->
          <!-- <div class="col-md-12">
            <div class="see-all-post text-center">
              <a class="btn btn-default th-btn solid-btn" href="#" role="button"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back To All Posts </a>
            </div>
          </div>
  			</div>
  			<div class="col-md-3"> -->
				  <!-- Blog Right Sections 
				  =========================-->
	  				<div class="blog-sidbar">
		<!-- <div class="search widgets">
			<form class="form-inline">
			  <div class="form-group search-input">
			    <input type="text" class="form-control" placeholder="Search ...">
			  </div>
			  <button type="submit" class="btn btn-default tf-search-btn"><i class="tf-search"></i></button>
			</form>
		</div>
		<div class="categories widgets">
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
		<div class="related-post widgets">
			<div class="list-group">
				<div class="list-group-item active text-center">
				Related Post
				</div>
				<a href="#" class="list-group-item">
					<div class="media">
					  <div class="media-left media-middle"><p class="post-count">1</p></div>
					  <div class="media-body">
					    <p>Typography is  important fact for liusto odio dolore.</p>
					  </div>
					</div>
				</a>
				<a href="#" class="list-group-item">
					<div class="media">
					  <div class="media-left media-middle"><p class="post-count">2</p></div>
					  <div class="media-body">
					    <p>Typography is  important fact for liusto odio dolore.</p>
					  </div>
					</div>
				</a>
				<a href="#" class="list-group-item">
					<div class="media">
					  <div class="media-left media-middle"><p class="post-count">3</p></div>
					  <div class="media-body">
					    <p>Typography is  important fact for liusto odio dolore.</p>
					  </div>
					</div>
				</a>
				<a href="#" class="list-group-item">
					<div class="media">
					  <div class="media-left media-middle"><p class="post-count">4</p></div>
					  <div class="media-body">
					    <p>Typography is  important fact for liusto odio dolore.</p>
					  </div>
					</div>
				</a>
			</div>
		</div>
	</div>
  			</div>
  		</div> -->
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
