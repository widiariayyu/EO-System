
	
    <div class="form-group">
	<label for="nama">Nama Promo</label>
	<input type="text" class="form-control"  name="nama" id="nama" value="{{$promo->promo}}">
</div>
<div class="form-group">
	<label for="id_kategori">Kategori</label>
    <select name="kategori" class="form-control">
        <option value="">-pilih kategori-</option>
				@foreach( $kategoris as $kategori )
            @if($promo->kategori_id==$kategori->id)
              <option value="{{ $kategori->id }}" selected>{{ $kategori->kategori }}</option>
            @else
              <option value="{{ $kategori->id }}" >{{ $kategori->kategori }}</option>
            @endif
          @endforeach
        </select>
</div>
<div class="form-group">
	<label for="date">Tanggal Dibuat</label>
	<input type="text" class="form-control"  name="date1" id="date1" value="{{$promo->tanggal_dibuat}">
</div>
<div class="form-group">
	<label for="date">Tanggal Berakhir</label>
	<input type="text" class="form-control"  name="date2" id="date2" value="{{$promo->tanggal_berakhir}">
</div>
<div class="form-group">
	<label for="harga">Harga Promo</label>
	<input type="text" class="form-control"  name="harga" id="harga" value="{{$promo->Harga}">
</div>
<div class="form-group">
	<label for="foto">Foto</label>
	<input type="text" class="form-control"  name="foto" id="foto" value="{{$promo->foto}">
</div>


