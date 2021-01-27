<?php
	require '../assets/function/function.php';

	echo "<option value=''>Pilih Jurusan</option>";

	$query = "SELECT * FROM jurusan ORDER BY nama_jurusan ASC";
	$dewan1 = $conn->prepare($query);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['kode_jurusan'] . "'>" . $row['nama_jurusan'] . "</option>";
	}
?>