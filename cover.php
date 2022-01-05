<?php
   session_start();

   if( !isset($_SESSION["login"])){
       header("Location: signin.php");
       exit;
   }


    require 'function.php';
    
     //pagination
    //konfigurasi
    $jumlahdataperhalaman = 15;
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
    <title>Home Berita</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleaku.css">
    <link rel="stylesheet" href="css/stylebeken.css">
    
    

    <!-- Start datatable css -->
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"> 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
	  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">  -->
   

    <!-- Bootstrap core CSS -->
    <!-- <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" /> -->

    <!-- <style>

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
    </style> -->

    <style>
      .bg {
        background-color: #eae4e9;
      }
    </style>

    <!-- Custom styles for this template -->
    <!-- <link href="cover.css" rel="stylesheet" /> -->
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


      
      <div class="container mt-3">
      <div class="card" style="background-color: white;">
                <div class="card-body">
      <div class="data-tables datatable-dark pinggiran" >
      <table class="table table-bordered" style="background-color: #fb9902; color: white; font-size: 20px; font-weight: bold;" id="berita-datatable">
      <thead>
          <tr>
            <td>No</td>
            <td>ID</td>
            <td>Aksi</td>
            <td>Nama Berita</td>
            <td>Tanggal Berita</td>
            <td>Penulis</td>
          </tr>
      </thead>
      <tbody>
        <?php $i=1; ?>
        <?php foreach ($databerita as $row): ?>
          
          <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $row["id"];?></td>
            <td>
              <a href="ubah.php?id=<?php echo $row["id"];?>" style="color: #924324;">ubah</a>
              <a href="hapus.php?id=<?php echo $row["id"];?>" style="color: #924324;" onclick="return confirm('yakin?')">hapus</a>
            </td>
            <td><?php echo $row["namaberita"];?></td>
            <td><?php echo $row["tanggal"];?></td>
            <td><?php echo $row["penulis"]; ?></td>
          </tr>
        
          <?php $i++; ?>
          <?php endforeach; ?>
          </tbody>

      </table>
      <nav aria-label="Page navigation example bekgron">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link">Previous</a>
            </li>
            <li class="page-item ">
              <a class="page-link" href="#">
              <?php for($i = 1; $i <= $jumlahhalaman; $i++) : ?>
              <?php if( $i == $halamanaktif): ?>
              <a href="?halaman=<?php echo $i; ?>" style="font-weight: bold; color: #924324;"><?php echo $i; ?></a>
              <?php else: ?>
              <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
              <?php endif; ?>
              <?php endfor; ?>
              </a>
            </li>
            <!-- <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li> -->
            <li class="page-item disabled">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
      </div>
      </div>
      </div>


     <!--footer-->
    <footer class="fixed-bottom">
    </footer >

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- datatables script -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
    <!-- <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>

    <script type="text/javascript">
    $(document).ready( function () {
      $('#myTable').DataTable();
    } );
    </script>

  </body>
</html>