<?php 
 // koneksi database
$conn = mysqli_connect("localhost","root","","phpdasar");
// ambil data mahasiswa
function query ($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	// looping pengambilan data
	while ($row = mysqli_fetch_assoc($result)) {
		# code pengambilan data dari dalam db(penambahan element baru di tiap array)
		$rows[] = $row;
	}
	return $rows;
}


// tambah data mahasiswa
function tambah($data) {
	// ambil data dari tiap element dalam form
 	global $conn;
 	$nama = htmlspecialchars($data["nama"]);
	$nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);

    // uploud gambar bila gagal maka fungsi lainnya tidak di jalankan
    $gambar = upload();
    if ( !$gambar ) {
    	# code...
    	return false;
    }

	 // query insert data
	// untuk mempermudah dan terlihat lebih enak
	$query = "INSERT INTO  mahasiswa
	            VALUES
	          ('','$nama','$nrp','$email','$jurusan','$gambar')
	          ";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

// dosen
function tambah_dosen($data)
{
    // ambil data dari tiap element dalam form
    global $conn;
    $nrd = htmlspecialchars($data["nrd"]);
    $kode_dosen = htmlspecialchars($data["kode_dosen"]);
    $nama = htmlspecialchars($data["nama"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $email = htmlspecialchars($data["email"]);
    $agama = htmlspecialchars($data["agama"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$username = htmlspecialchars($data["username"]);
	$password = mysqli_real_escape_string($conn, $data["password"]);
    $role='dosen';
	$result = mysqli_query($conn, "SELECT kode_dosen FROM dosen WHERE kode_dosen = '$kode_dosen'");
	$result1 = mysqli_query($conn, "SELECT kode_dosen FROM dosen WHERE nrd = '$nrd'");

	if (mysqli_fetch_assoc($result)){
		echo "<script>
					alert('Kode Dosen sudah terdaftar!')
					</script>";
		return false;
	}
	if (mysqli_fetch_assoc($result1)){
		echo "<script>
					alert('nrd sudah terdaftar!')
					</script>";
		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);
        
        
    // uploud gambar bila gagal maka fungsi lainnya tidak di jalankan
    $gambar = upload();
    if (!$gambar) {
        # code...
        return false;
    }

        // query insert data
        // untuk mempermudah dan terlihat lebih enak
		$query1 = mysqli_query($conn, "INSERT into users(email, username, password, role) values('$email','$username','$password', '$role')") or die (mysqli_error($conn));

        $query = mysqli_query($conn, "INSERT into dosen(nrd, kode_dosen, nama, tanggal_lahir, email, agama, jenis_kelamin, alamat, gambar) 
		values('$nrd','$kode_dosen', '$nama', '$tanggal_lahir',  '$email', '$agama', '$jenis_kelamin', '$alamat','$gambar')") 
		or die (mysqli_error($conn));

        return mysqli_affected_rows($conn);
    }


	// fungsi uploud
	function upload()	{
		// ada 5 array yg dihasilkan enctype(input type FILES) array(assosiatif) yaitu : name,type,size,error,tmp_name(tempat penyimpanan sementara
		// variabel baru untuk uploud(type di pisah dengan variabel baru)
		$namaFile = $_FILES['gambar']['name'];
		$ukuranFile = $_FILES['gambar']['size'];
		$error = $_FILES['gambar']['error'];
		$tmpName= $_FILES['gambar']['tmp_name'];

	// mengecek apakah ada atau tidak ada gambvar yg di uploud
	if ($error === 4) {
		# code...
		echo "<script>
			alert ('pilih gambar terlebih dahulu');
			</script>
			";
			return false;
	}

	// memastikan agar hanya gambar yg bisa di uploud
	$ekstensiGambarValid = ['jpg','png','jpeg'];
	// sedikit trick untuk memecah gambar(ambil ekstensi gambarnya)
	$ekstensiGambar = explode('.', $namaFile);
	// pastikan ambil value akhirnya(gunakan end), dan paksa nilainya menjadi huruf kecil(strtolower)
	$ekstensiGambar = strtolower(end( $ekstensiGambar ));
	// 
	if ( !in_array($ekstensiGambar, $ekstensiGambarValid )){
		echo "<script>
			alert ('yang anda uploud bukan gambar');
			</script>
			";
			return false;
	}


	// cek ukuran gambar(pembatasan)
	if ($ukuranFile > 2000000 ) {
		echo "<script>
			alert ('ukuran terlalu besar');
			</script>
			";
			return false;
	}
	// generate nama gambar baru agar tidak timpah
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

		// gambar dinyatakan aman
	move_uploaded_file($tmpName, 'assets/image/' . $namaFileBaru);

	return $namaFileBaru ;
}



// hapus & ubah data
function hapus($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM mahasiswa WHERE id = $id ");

	return mysqli_affected_rows($conn);
}

function hapus_dosen($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM dosen WHERE id = $id ");

	return mysqli_affected_rows($conn);
}

// tambah data mahasiswa
function ubah($data) {
	// ambil data dari tiap element dalam form
 	global $conn;
 	$id = $data["id"];
 	$nama = htmlspecialchars($data["nama"]);
	$nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$status = htmlspecialchars($data["status"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);
	

    // mengecek apa user mengganti gambarnya atau ngga
    if ($_FILES['gambar']['error'] === 4) {
    	# code...
    	$gambar = $gambarLama;
    } else {
    	$gambar = upload();
    }


 // query upadte data
// untuk mengeupdate data
$query = "UPDATE mahasiswa SET
          nama = '$nama',
          nrp = '$nrp',
          email = '$email',
          jurusan = '$jurusan',
          gambar = '$gambar'
          WHERE id = $id
          ";

          // mengembalikan data ke form
		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
}

// ubah data dosen
function ubah_dosen($data) {
	// ambil data dari tiap element dalam form
 	global $conn;
 	$id = $data["id"];
 	$nrd = htmlspecialchars($data["nrd"]);
    $kode_dosen = htmlspecialchars($data["kode_dosen"]);
    $nama = htmlspecialchars($data["nama"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $email = htmlspecialchars($data["email"]);
    $agama = htmlspecialchars($data["agama"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);
	

    // mengecek apa user mengganti gambarnya atau ngga
    if ($_FILES['gambar']['error'] === 4) {
    	# code...
    	$gambar = $gambarLama;
    } else {
    	$gambar = upload();
    }

 // query upadte data
// untuk mengeupdate data
$query = "UPDATE dosen SET
          nrd = '$nrd',
		  kode_dosen = '$kode_dosen',
		  nama = '$nama',
		  tamggal_lahir = '$tanggal_lahir',
          email = '$email',
          agama = '$agama',
		  jenis_kelamin = '$jenis_kelamin',
		  alamat = '$alamat',
          gambar = '$gambar'
          WHERE id = $id
          ";

          // mengembalikan data ke form
		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
}

function cari($keyword) {
	$query = "SELECT * FROM mahasiswa
				WHERE
				nama LIKE '%$keyword%' OR
				nrp LIKE '%$keyword%' OR
				email LIKE '%$keyword%' OR
				jurusan LIKE '%$keyword%'
				";
	return query($query);
}

function cari_dosen($keyword) {
	$query = "SELECT * FROM dosen
				WHERE
				nama LIKE '%$keyword%' OR
				nrd LIKE '%$keyword%' OR
				email LIKE '%$keyword%' OR
				jurusan LIKE '%$keyword%'
				";
	return query($query);
}

// fungsi registrasi
function registrasi($data){
	global $conn;
	
	// strtolower untuk menjadikan semua username kecil
	$email2 = htmlspecialchars( $data["email2"]);
	$username2 = strtolower(stripslashes( $data["username2"]));
	// fungsi mysqli_real_escape_string untuk menambahkan kutip dengan aman pada password
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	$role='mahasiswa';
	// cek username
	$result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username2'");

	if (mysqli_fetch_assoc($result)){
		echo "<script>
					alert('username sudah terdaftar!')
					</script>";
		return false;
	}

	// cek konfirmasi password
	if ( $password !== $password2 ){
		echo "<script>
					alert('password tidak sesuai');
					</script>";
		return false;
	}
	// enskripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan ke dalam database
	mysqli_query($conn, "INSERT INTO users VALUES ('','$email2', '$username2','$password','$role' )");

	return mysqli_affected_rows($conn);
}


 ?>

