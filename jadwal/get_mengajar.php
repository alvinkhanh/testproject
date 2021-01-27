<?php
    require '../assets/function/function.php';
	$jurusan = $_POST['jurusan'];

	echo "<option value=''>Pilih dosen & matakuliah</option>";

	$query = "SELECT dosen.nama, mengajar.id_mengajar, matkul.nama_matkul 
	FROM mengajar, matkul, dosen
	WHERE kode_jurusan=? 
	ORDER BY mengajar.kode_dosen ASC";
	$dewan1 = $conn->prepare($query);
	$dewan1->bind_param("i", $jurusan);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id_mengajar'] . "'>" . $row['nama'] . "--" . $row['nama_matkul'] . "</option>";
	}
?>