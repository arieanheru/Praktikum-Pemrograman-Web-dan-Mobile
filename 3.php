
<?php
            $listnama= ["Chris", "Kris", "Hiroki", "Yoshio Yuki","Ichirou","Minato"]; 
    ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 3 - Modul 1</title>
</head>
<body>
  <h2>Menampilkan kebalikan dari nama yang diinputkan.</h2>
      <table border="2" cellpadding="15">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Kebalikan Nama</th>
            </tr>
          </thead>
      
           <?php foreach ($listnama as $name) :  ?>
      
                    <tr>
                        <td><?php echo $name."<br>"; ?></td>
                        <td><?php echo strrev($name)."<br>"; ?></td>
                
                    </tr>            
	                  <?php endforeach; ?>   
      </table>
</body>
</html>