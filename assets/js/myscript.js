
//tombol hapus
$(".tombol-hapus").on("click", function (e) {
	e.preventDefault();
	const form = $(this).parents("form");
	Swal.fire({
		title: "Konfirmasi",
		text: "Ingin menghapus data ini?",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Ya, Hapus",
		cancelButtonText: "Tidak",
	}).then((result) => {
		if (result.value) {
			form.submit();
		}
	});
});

//Logout
$(".tombol-logout").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal.fire({
		title: "Konfirmasi",
		text: "Anda ingin keluar?",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Keluar",
		cancelButtonText: "Batal",
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});
});
