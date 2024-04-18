const flashData = $('.flash-data').data('flashdata');

if (flashData == 'berhasil') {
	Swal.fire({
		title: 'Sukses',
		text: 'Data Berhasil Disimpan',
		type: 'success'
	});
} else if (flashData == 'loginberhasil') {
	Swal.fire({
		title: 'Sukses',
		text: 'Selamat datang kembali Administrator.',
		type: 'success'
	});
} else if (flashData == 'sendpesan') {
	Swal.fire({
		title: 'Sukses',
		text: 'Pesan Anda sudah terkirim, Mohon ditunggu balasannya. Terimakasih',
		type: 'success'
	});
} else if (flashData == 'gagal') {
	Swal.fire({
		title: 'Gagal',
		text: 'Data Gagal Disimpan',
		type: 'error'
	});
} else if (flashData == 'gagallogin') {
	Swal.fire({
		title: 'Login Gagal',
		text: 'Username atau Password yang Anda masukan salah.',
		type: 'error'
	});
} else if (flashData == 'statusoff') {
	Swal.fire({
		title: 'Sistem Keamanan',
		text: 'Access Ditolak. Silahkan Login Terlebih Dahulu.',
		type: 'error'
	});
} else if (flashData == 'gagalkonfirmasi') {
	Swal.fire({
		title: 'Gagal',
		text: 'Konfirmasi Anda Gagal Silahkan Hubungi CS Kami',
		type: 'error'
	});
} else if (flashData == 'gagalresi') {
	Swal.fire({
		title: 'Gagal',
		text: 'No. Resi tidak ditemukan, silahkan hubungi CS kami.',
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
		text: 'Produk Berhasil Dihapus',
		type: 'success'
	});
} else if (flashData == 'bayar') {
	Swal.fire({
		title: 'Sukses',
		text: 'Pesanan Anda sudah kami terima, silahkan melakukan pembayaran. Terima Kasih',
		type: 'success'
	});
} else if (flashData == 'berhasilkonfirmasi') {
	Swal.fire({
		title: 'Sukses',
		text: 'Konfirmasi Anda berhasil dilakukan, silahkan tunggu informasi selanjutnya.',
		type: 'success'
	});
} else if (flashData == 'ditemukan') {
	Swal.fire({
		title: 'Sukses',
		text: 'Pesanan Anda Berhasil Ditemukan.',
		type: 'success'
	});
}

