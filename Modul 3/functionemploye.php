<?php
   $db = mysqli_connect("localhost", "root", "", "karyawan");


    function query($query){
        global $db;
        $result = mysqli_query($db, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
        return $rows;
    }


    function tambah($data){
	global $db;
	// ambil data dari tiap elemen dalam form
	$nama = htmlspecialchars($data["nama"]);
	$jabatan = htmlspecialchars($data["jabatan"]);
	$gaji = htmlspecialchars($data["gaji"]);

	$query = "INSERT INTO pegawai
				VALUES
				('', '$nama', '$jabatan', '$gaji')
				";
	// query insert data
	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
    }

    function ubah($data){
	global $db;
	$id_pegawai = $data["id_pegawai"];
	// ambil data dari tiap elemen dalam form
	$nama = htmlspecialchars($data["nama"]);
	$jabatan = htmlspecialchars($data["jabatan"]);
	$gaji = htmlspecialchars($data["gaji"]);
	$query = "UPDATE pegawai SET 
				nama = '$nama', 
				jabatan ='$jabatan'
				gaji ='$gaji'
				WHERE id_pegawai = $id_pegawai
			";
	// query insert data
	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}

    function hapus($id){
        global $db;
        mysqli_query($db, "DELETE FROM pegawai WHERE id_pegawai = $id");
        return mysqli_affected_rows($db);
    }

?>