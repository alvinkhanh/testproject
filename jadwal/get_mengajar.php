<?php
    require '../assets/function/function.php';
	$jurusan = $_POST['jurusan'];

	echo "<option value=''>Pilih dosen & matakuliah</option>";
	
	$query = "SELECT DISTINCT mengajar.kode_jurusan, matkul.nama_matkul, dosen.nama
	FROM mengajar, matkul, dosen
	WHERE kode_jurusan=?
	ORDER BY mengajar.kode_jurusan ASC";
	
	// $query = "SELECT mengajar.kode_jurusan, matkul.id_matkul, dosen.id
	// FROM mengajar
	// INNER JOIN (SELECT DISTINCT kode_jurusan, nama_matkul, nama 
	// FROM dosen) dosen
	// ON mengajar.kode_jurusan = ?
	// ORDER BY kode_jurusan
	// ";

	// $query = "SELECT DISTINCT mengajar.kode_jurusan, matkul.nama_matkul, dosen.nama
	// FROM mengajar, matkul, dosen
	// WHERE kode_jurusan=?
	// ORDER BY mengajar.kode_jurusan ASC";
	$dewan1 = $conn->prepare($query);
	$dewan1->bind_param("s", $jurusan);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	echo var_dump($dewan1);
	while ($row = $res1->fetch_assoc()) {		
		echo "<option value='" . $row['id_mengajar'] . "'>" . $row['nama'] . "--" . $row['nama_matkul'] . "</option>";
	}

?>