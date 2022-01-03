<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data berita</title>
</head>
<body>
    <h1>Tambah Data berita</h1>

<form method='post' action=''>
	<div class="form-group">
		<label for="namaberita">Judul Berita</label>
		<input type="text" id="namaberita" class="form-control" placeholder="Contoh form text ...">
	</div>
    <br>
	<div class="form-group">
		<label for="penulis">Penulis</label>
		<input type="text" id="penulis" class="form-control" placeholder="Contoh form angka ...">
	</div>

    <br>

    <div class="form-group">
		<label for="tanggal">Tanggal berita</label>
		<input type="text" id="tanggal" class="form-control" placeholder="Contoh form angka ...">
	</div>
    
    <br>

 	<div id="editor">
	<div class="form-group">
		<label for="isiberita">IsiBerita</label>
		<textarea class="form-control" id="isiberita" rows="3" placeholder="Contoh textarea .."></textarea>
	</div>
	</div>
    <br>
    <div class="form-group">
		<label for="gambar">Gambar</label>
		<input type="" id="gambar" class="form-control" placeholder="Contoh form angka ...">
	</div>
    <br>
 
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
    



	<script src="editor/ckeditor.js"></script>
    <script src="editor/ckeditor.js.map"></script>

    <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
   
</body>
</html>