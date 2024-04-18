const flashData = $('.flash-data').data('flashdata');

if (flashData == 'berhasil') {
	Swal.fire({
		title: 'Sukses',
		text: 'Data Berhasil Disimpan',
		type: 'success'
	});
} else if (flashData == 'gagal') {
	Swal.fire({
		title: 'Gagal',
		text: 'Data Gagal Disimpan',
		type: 'error'
	});
} else if (flashData == 'rubah') {
	Swal.fire({
		title: 'Sukses',
		text: 'Data Berhasil Dirubah',
		type: 'success'
	});
} else if (flashData == 'delete') {
	Swal.fire({
		title: 'Sukses',
		text: 'Data Berhasil Dihapus',
		type: 'success'
	});
}
