<?php
   session_start();

   if( !isset($_SESSION["login"])){
       header("Location: signin.php");
       exit;
   }


    require 'function.php';
    
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

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />

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
    </style>

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet" />
  </head>
  <body class="text-white bg-dark">
    
    
    <nav class="navbar navbar-expand-lg navbar-dark  bg-warning shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="">halaman Input Data</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="cover.php">List Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="inputdata.php">Input Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

      

      <table class="table text-white" border="0" cellspacing="10" cellpadding="">
        <tr>
          <td>no</td>
          <td>id</td>
          <td>aksi</td>
          <td>nama berita</td>
          <td>tanngal berita</td>
          <td>penulis</td>
        </tr>

        <?php $i=1; ?>
        <?php foreach ($databerita as $row): ?>
          <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $row["id"];?></td>
            <td>
              <a href="ubah.php?id=<?php echo $row["id"];?>">ubah</a>
              <a href="hapus.php?id=<?php echo $row["id"];?>" onclick="return confirm('yakin?')">hapus</a>
            </td>
            <td><?php echo $row["namaberita"];?></td>
            <td><?php echo $row["tanggal"];?></td>
            <td><?php echo $row["penulis"]; ?></td>
          </tr>
          <?php $i++; ?>
          <?php endforeach; ?>

      </table>
      <?php for($i = 1; $i <= $jumlahhalaman; $i++) : ?>
      <?php if( $i == $halamanaktif): ?>
        <a href="?halaman=<?php echo $i; ?>" style="font-weight: bold; color: red;"><?php echo $i; ?></a>
      <?php else: ?>
        <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
      <?php endif; ?>
      <?php endfor; ?>

     <!--footer-->
    <footer class="fixed-bottom footer">
      <div class="text-white">
        <p class="text-center">
          Created with Love By <a href="https://www.instagram.com/dendiriki123/" class="text-white fw-bold"> Dendi riki rahmawan <br /><br /></a>
        </p>
      </div>
    </footer >
    <!--akir footer-->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
   
  </body>
</html>