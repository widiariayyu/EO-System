<link rel="stylesheet" href="{{ asset ('vendors/dropzone/dist/min/dropzone.min.css')}}">
	
<div class="form-group">
	<label for="nama">Nama Promo</label>
	<input type="text" class="form-control"  name="nama" id="nama">
</div>
<div class="form-group">
	<label for="id_kategori">Kategori</label>
    <select name="kategori" class="form-control">
        <option value="">-pilih kategori-</option>
          @foreach( $kategoris as $kategori )
            <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
          @endforeach
        </select>
</div>
<div class="form-group">
	<label for="date">Tanggal Dibuat</label>
	<input type="text" class="form-control"  name="date1" id="date1">
</div>
<div class="form-group">
	<label for="date">Tanggal Berakhir</label>
	<input type="text" class="form-control"  name="date2" id="date2">
</div>
<div class="form-group">
	<label for="harga">Harga Promo</label>
	<input type="text" class="form-control"  name="harga" id="harga">
</div>
<div class="form-group">
	
	<form action="upload.blade.php" method="post" enctype="multipart/form-data">
	<label for="foto">Select Image</label>
    <input type="file" name="fileToUpload" id="fileToUpload">
    
</form>

	<!-- <input type="text" class="form-control"  name="foto" id="foto"> -->
</div>


