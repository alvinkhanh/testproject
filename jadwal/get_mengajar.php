<?php
    require '../assets/function/function.php';
	$jurusan = $_POST['jurusan'];

	echo "<option value=''>Pilih jurusan</option>";

	$query = "SELECT * FROM kabupaten WHERE id_prov=? ORDER BY nama ASC";
	$dewan1 = $db1->prepare($query);
	$dewan1->bind_param("i", $provinsi);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id_kab'] . "'>" . $row['nama'] . "</option>";
	}
?>