
<?php
            $listnama= ["Chris", "Kris", "Hiroki", "Yoshio Yuki","Ichirou","Minato"]; 
    ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 1 - Modul 1</title>
</head>
<body>
  <h2>Nama-nama disimpan didalam variabel array.</h2>
      <table border="2" cellpadding="15">
          <thead>
            <tr>
               <th>Nama</th>
            </tr>
          </thead>
           <?php foreach ($listnama as $name) :  ?>
                    <tr>
                        <td><?php echo $name."<br>"; ?></td>
                    </tr>            
	                  <?php endforeach; ?>   
      </table>
</body>
</html>
