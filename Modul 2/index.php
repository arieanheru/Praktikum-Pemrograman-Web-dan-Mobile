<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $user = strlen($username);
        $pass = strlen($password);
        $x = true;

        if($user>7){
            echo "Username melebihi 7 karakter. <br>";
            $x = false;
        }
        if (!preg_match("/[A-Z]/", $password) ) {
            echo "Password harus terdiri dari huruf kaptial! <br>";
           $x = false;
        }
        if (!preg_match("/[a-z]/", $password)) {
            echo "Password harus terdiri dari huruf kecil <br>";
           $x = false;
        }
    
        if (!preg_match("/[^a-zA-Z\d]/", $password)) {
            echo "Password harus terdiri dari special character <br>";
            $x = false;
        }
    
        if (!preg_match("/[0-9]/", $password)) {
            echo "Password harus terdiri dari angka <br>";
           $x = false;
        }
        if($pass<10){
            echo "Password kurang dari 10! <br>";
            $x = false;
        }
        if( $x == true ){
            echo "Registrasi Berhasil!";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <ul>
            <li>
                <label for="username">Username</label>
            <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
            <input type="text" name="password" id="password">
            </li>
            <li>
            <button type="submit">Send</button>
            </li>
        </ul>
    </form>
</body>
</html>
