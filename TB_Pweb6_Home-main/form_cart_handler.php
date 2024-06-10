<?php
require_once "config.php";

if (isset($_POST['submit'])) {
    // ====================
    $tmp = $_FILES['image']['tmp_name'];
    $nameImage = $_FILES['image']['name'];
    $size = $_FILES['image']['size'];
    $err = $_FILES['image']['error'];
    
    $tipe_gambar = strtolower(pathinfo($nameImage,PATHINFO_EXTENSION));
    $nameImage = uniqid();
    $namabaru = $nameImage.'.'.$tipe_gambar;

    move_uploaded_file($tmp,'gambar/'.$namabaru);

    // ========================
    $nama = $_POST['nama'];
    $type = $_POST['image_type'];
    $price = $_POST['price'];
    $shade = $_POST['shade'];

    $query = "INSERT INTO products( name, image, image_type,price,shade) VALUES(?,?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssds", $nama, $namabaru, $type, $price, $shade);
    $stmt->execute();

    
    if ($type == 1) {
        header('Location: spesialset.php');
    } elseif ($type==2) {
        header('Location: spesialset.php');
    } elseif ($type==3){
        header('Location: spesialset.php');
    }elseif ($type==4){
        header('Location: spesialset.php');
    }elseif ($type==5){
        header('Location: spesialset.php');
    }else{
        header('Location: spesialset.php');
    }
    
    $stmt->close();
} else {
    # code...
}



?>