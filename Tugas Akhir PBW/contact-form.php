<?php
    $host = "lochalhost";
    $user = "root";
    $pass = "";

    $connect = mysql_connect($host,$user,$pass);
    $select = mysql_select_db($connect);

    if($select){
        echo'Masukkan anda berhasil direkam';
    }
    else{
        echo'Masukkan anda gagal direkam';
    }

?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Masukkan Anda telah direkam.</h1>
    </body>
</html>
