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
	$username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $id_pegawai = htmlspecialchars($data["id_pegawai"]);


	$query = "INSERT INTO login
				VALUES
				('', '$username','$password', '$id_pegawai')
				";
	// query insert data
	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
    }

    function hapus($id){
        global $db;
        mysqli_query($db, "DELETE FROM login WHERE id_login = $id");
        return mysqli_affected_rows($db);
    }

?>