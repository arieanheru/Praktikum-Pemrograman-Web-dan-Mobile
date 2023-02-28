
<?php
            $listnama= ["Chris", "Kris", "Hiroki", "Yoshio Yuki","Ichirou","Minato"];
            function vokal($kalimat) {
            $a = substr_count($kalimat, 'a');
            $i = substr_count($kalimat, 'i');
            $u = substr_count($kalimat, 'u');
            $e = substr_count($kalimat, 'e');
            $o = substr_count($kalimat, 'o');

            $count = ($a+$i+$u+$e+$o);

            return $count;
          }

          function konsonan($kalimat) {
            $jumlah = strlen($kalimat) - substr_count($kalimat, ' ');
            $a = substr_count($kalimat, 'a');
            $i = substr_count($kalimat, 'i');
            $u = substr_count($kalimat, 'u');
            $e = substr_count($kalimat, 'e');
            $o = substr_count($kalimat, 'o');

            $count = $jumlah - ($a+$i+$u+$e+$o);

            return $count;
        }

    ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 4 - Modul 1</title>
</head>
<body>
  <h2>Menampilkan jumlah konsonan dan jumlah vokal pada nama yang telah diinputkan.</h2>
      <table border="2" cellpadding="15">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Jumlah Huruf Vokal</th>
              <th>Jumlah Huruf Konsonan</th>
            </tr>
          </thead>
      
           <?php foreach ($listnama as $name) :  ?>
                    <tr>
                        <td><?php echo $name."<br>"; ?></td>
                        <td><?= vokal(  $name);  ?></td>
                        <td><?= konsonan( $name);  ?></td>
                    </tr>            
	                  <?php endforeach; ?> 
      
      </table>
</body>
</html>
