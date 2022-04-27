<?php
   // $target = "foto/";

    //$file = $target. basename($_FILES["myfoto"]["name"]);
    include "myconnection.php";
    //if(move_uploaded_file($_FILES["myfoto"]["tmp_name"],$file)) {
        $name = $_GET["myname"];
        $address = $_GET["myaddress"];
        
        $query = "INSERT INTO student(name, address) VALUE('$name', '$address')";

        if(mysqli_query($connect, $query)) {
            echo "Data baru berhasil ditambahkan!";
        } else {
            echo "Data baru gagal ditambahkan! <br>". mysqli_error($connect);
        }
        mysqli_close($connect);
    //} else {
       // echo "Error";
  //  }
?>