$('#editModal').on('show.bs.modal', function (event) {
	console.log('Modal Opened');
	var button = $(event.relatedTarget) // Button that triggered the modal
	alert(button.attr("data-fid"));
	var promo = button.data('fpromo')
	var kategori = button.data('fkategori')
	var tanggal_dibuat = button.data('fdate1')
	var tanggal_berakhir = button.data('fdate2')
	var Harga = button.data('fharga')
	var foto = button.data('ffoto')
	     


	var modal = $(this)
	modal.find('.modal-body #promo').val(promo)
	modal.find('.modal-body #kategori').val(kategori)
	modal.find('.modal-body #date1').val(date1)
	modal.find('.modal-body #date2').val(date2)
	modal.find('.modal-body #harga').val(harga)
	modal.find('.modal-body #foto').val(foto)
	
})

