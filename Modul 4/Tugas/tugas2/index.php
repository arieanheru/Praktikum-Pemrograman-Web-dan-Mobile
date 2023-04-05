<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    <form method="post">
        <select name="pilihan">
            <option value="1">1. Niki</option>
            <option value="2">2. Jeremy</option>
            <option value="3">3. Akbar</option>
            <option value="4">4. Oniel</option>
            <option value="5">5. Adel</option>
        </select>
    <label>ID Pemilih</label>
    <input type="number" name="id_pemilih"/>
    <button name="kirim" type="submit" >Kirim</button>
    <form>
    <?php 
    require './koneksi.php';
    if (isset($_POST["kirim"])) {
    //Mengambil value Pilihan dan ID Pilihan
    $pilihan = $_POST['pilihan'];
    $id_pemilih = $_POST['id_pemilih'];
        $data1 = mysqli_query($koneksi,"select * from suara where id_pemilih='$id_pemilih'");
    // Menghitung jumlah data (jika belum menggunakan ID yang sama)
    $cek = mysqli_num_rows($data1);
    echo $cek; 
    if($cek <= 0){

    $data =mysqli_query($koneksi,"INSERT INTO `suara` (`id_suara`, `id_pemilih`, `pilihan`, `waktu`) VALUES ('', '$id_pemilih', '$pilihan', CURRENT_TIME())");

    if ($data) {
        ?>
    <script language="javascript">
    alert("Data Berhasil Ditambah");
    </script>
    <?php

    }}else if ($cek >= 0){
        ?>
        <script language="javascript">
        alert("Maaf, kamu hanya dapat melakukan pemilihan satu kali dengan ID ini.");
        
        </script>
        <?php  

    }
    }
    ?> 	
    </body>
</html>