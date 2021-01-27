<?php
    require '../assets/function/function.php';
	$jurusan = $_POST['jurusan'];

	echo "<option value=''>Pilih Kelas</option>";

	$query = "SELECT * FROM kelas WHERE kode_jurusan=? ORDER BY kelas ASC";
	$dewan1 = $conn->prepare($query);
	$dewan1->bind_param("i", $jurusan);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id_kelas'] . "'>" . $row['kelas'] . "</option>";
	}
?>