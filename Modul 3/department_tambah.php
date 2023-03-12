<?php 

  require 'functiondepart.php';



// cek tombol submit sdh ditekan atau belum
if(isset($_POST["submit"])) {
	// cek apakah data berhasil di tambahkan atau tidak
	if (tambah($_POST)>0){
		echo "
				<script>
					alert('data berhasil ditambahkan!');
					document.location.href = 'department_tambah.php';
				</script>
		";
	} else {
		echo "
		<script>
					alert('data gagal ditambahkan!');
					document.location.href = 'department_tambah.php';
				</script>
		";
	}


}
	
	
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>BAB3</title>
  </head>
  <body>

   <div class="container">
     <div class="row">
                <div class="col">
                        <h1>Tambah Data Login</h1>
   

                        <a href="department.php">
                        <div class="div btn btn-primary mb-4">
                            Kembali
                        </div>
                        </a>
              
                    <form action="" method="post">
                    
                        <ul>
                            
                            <li class="mb-2">
                                <label for="nama_depart">Username : </label>
                                <input type="text" name="username" id="username" required>
                            </li>
                            <li class="mb-2">
                                <label for="nama_depart">Password : </label>
                                <input type="password" name="password" id="password" required>
                            </li>
                            <li  class="mb-2">
                            
                                <div class="form-group">
                                <label for="id_pegawai">Asosiasi</label>
                                <select name="id_pegawai" class="form-control" id="id_pegawai">
                                <option selected>Choose One</option>
                                <?php foreach($departs as $depart) : ?>
                                    
                                    <option value="<?= $depart["id_pegawai"] ?>"><?= $depart["nama"] ?></option>
                                
                                <?php endforeach; ?>
                                </select>
                            </div>
                            
                            </li>

                            <li class="mt-2">
                                <button type="submit" name="submit">Tambah Data!</button>
                            </li>
                            
                        </ul>
                    </form>

                                </div>
                    </div>
                </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>