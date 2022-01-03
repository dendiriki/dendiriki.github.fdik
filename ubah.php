<?php
   session_start();

   if( !isset($_SESSION["login"])){
       header("Location: signin.php");
       exit;
   }
   
   require 'function.php';
   
   
   //ambil data di url
   $id = $_GET["id"];
   
   //query data mahasiswa berdasarkan id 
   $data = query("SELECT * FROM databerita WHERE id = $id")[0];
   
   
   // $conn = mysqli_connect("localhost","root","","phpdasar");
   
   //cek apakah tombol sumbit sudah di tekan atau belum 
   if(isset($_POST["submit"])){
   
       //cek apakah data berhasil diubah atau tidak 
       if(ubah($_POST) > 0 ){
           echo "<script>
               alert('data berhasil diubah');
               document.location.href = 'cover.php';
           </script>";
       }else{
           echo "<script>
           alert('data gagal diubah');
           document.location.href = 'cover.php';
       </script>";
       mysqli_error($conn);
       }

}

   
   
?>


<!DOCTYPE html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>Cover Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <!-- <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="css/styleaku.css">

    <style>

      table{
        color: aliceblue;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .bgez {
        background-color: #eae4e9;
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet" />
  </head>
  <body class="text-white bgez">
  <nav class="navbar navbar-expand-lg navbar-dark  "  style=" color: maroon;">
      <div class="container">
        <a class="navbar-brand" href="" style=" color: white; font-size: 20px; font-weight: bold;">Halaman Input Data</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" style=" color: white; font-size: 15px; font-weight: bold;" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="cover.php">List Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="inputdata.php">Input Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="logout.php">logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>



      <br>

    <div class="wrapper">
			<div class="inner">
      <form action="" method="post" enctype="multipart/form-data">
     
					<h3 class="sub-judul judul-bek">Tambah Data</h3>
          <br><br>
           <input type="hidden" name="id" value="<?php echo $data["id"]?>">
           <input type="hidden" name="gambarlama" value="<?php echo $data["gambar"]?>">
					<label class="form-group" for="namaberita" style=" color: white; font-size: 20px; font-weight: bold;"> Masukkan Nama Berita :
						<input class="form-control" type="text" name="namaberita" id="namaberita" required value="<?php echo $data['namaberita']; ?>">
						<!-- <span for="">Masukkan Nama Berita :</span>
						<span class="border"></span> -->
					</label>
					<label class="form-group" for="penulis" style=" color: white; font-size: 20px; font-weight: bold;"> Masukkan Nama Penulis :
						<input type="text" class="form-control" name="penulis" id="penulis" required value="<?php echo $data['penulis']; ?>">
						<!-- <span for="">Masukkan Nama Penulis :</span>
						<span class="border"></span> -->
					</label>
          <label class="form-group" for="tanggal" style=" color: white; font-size: 20px; font-weight: bold;"> Masukan Tanggal Berita :
						<input class="form-control" type="text" name="tanggal" id="tanggal" required value="<?php echo $data['tanggal']; ?>">
						<!-- <span for="">Masukan Tanggal Berita :</span>
						<span class="border"></span> -->
					</label>
          <label class="form-group" for="gambar" style=" color: white; font-size: 20px; font-weight: bold;"> Masukan gambar yang ingin anda tambahkan :
						<input class="form-control" type="file" name="gambar" id="gambar" >
						<!-- <span for="">Masukan gambar yang ingin anda tambahkan :</span>
						<span class="border"></span> -->
					</label>
          <label class="form-group" for="isiberita" style=" color: white; font-size: 20px; font-weight: bold;"> Masukan Berita yang ingin anda ketik :
						<textarea class="form-control" name="isiberita" id="isiberita" cols="150" rows="10" required value="<?php echo $data['isiberita']; ?>"></textarea>
						<!-- <span for="">Masukan Berita yang ingin anda ketik :</span>
						<span class="border"></span> -->
					</label>
          <label class="form-group" for="deskripsi" style=" color: white; font-size: 20px; font-weight: bold;"> Masukan deskripsi yang ingin anda ketik :
          <textarea class="form-control" name="deskripsi" id="deskripsi" cols="150" rows="10" required value="<?php echo $data['deskripsi']; ?>"></textarea>
						<!-- <span for="">Masukan deskripsi yang ingin anda ketik :</span>
						<span class="border"></span> -->
					</label>
          <button class="zmdi zmdi-arrow-right" type="submit" name="submit">Tambah Data !
          </button>
				</form>
			</div>
		</div>
  </body>
</html>