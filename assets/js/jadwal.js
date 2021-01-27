	$(document).ready(function () {

		$.ajax({
			type: 'POST',
			url: "jadwal/get_jurusan.php",
			cache: false,
			success: function (msg) {
				$("#jurusan").html(msg);

			}
		});

		$("#jurusan").change(function () {
			$("#kelas").empty();
			var jurusan = $("#jurusan").val();
			$.ajax({
				type: 'POST',
				url: "jadwal/get_kelas.php",
				data: {
					jurusan: jurusan
				},
				cache: false,
				success: function (msg) {
					$("#kelas").html(msg);
					console.log(msg);
				},
				error(xhr, status, error) {
					console.log(error);
				}
			});
		});

		$("#jurusan").change(function () {
			var kelas = $("#jurusan").val();
			$.ajax({
				type: 'POST',
				url: "jadwal/get_mengajar.php",
				data: {
					jurusan: jurusan
				},
				cache: false,
				success: function (msg) {
					$("#mengajar").html(msg);
				},
				error(xhr, status, error) {
					console.log(error);
				}
			});
		});
	});