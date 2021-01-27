<?php
	require '../assets/function/function.php';
	$jurusan = $_POST['jurusan'];


	$query = "SELECT * FROM kelas WHERE kode_jurusan=? ORDER BY kelas ASC";
	$dewan1 = $conn->prepare($query);
	$dewan1->bind_param("s", $jurusan);
	$dewan1->execute();
	$res1 = $dewan1->get_result();

	if($res1->num_rows > 1){
		echo "<option value='0'>Pilih Kelas</option>";

		while ($row = $res1->fetch_assoc()) {
			echo "<option value='" . $row['id_kelas'] . "'>" . $row['kelas'] . "</option>";
		}
	} else {
			echo "<option value='0'>No Options</option>";

	}
?>