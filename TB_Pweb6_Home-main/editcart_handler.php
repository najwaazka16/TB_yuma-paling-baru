<?php
require_once "config.php";

if (isset($_POST['edit'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $type = $_POST['image_type'];
    $price = $_POST['price'];
    $shade = $_POST['shade'];
    $gam = $_POST['image'];


    if(($_FILES['image']['tmp_name']==null)){
        $query = "UPDATE products SET name=?, image=?, image_type=?,price=?,shade=? WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssdsd", $nama, $gam, $type, $price, $shade,$id);
        $stmt->execute();
        header('Location: view_product.php');
    }else{
        $quey="SELECT image FROM products WHERE id = ?";
        $res = $conn->prepare($quey);
        $res->bind_param("d", $id);
        $res->execute();
        $r = $res->get_result();
        $row = $r->fetch_assoc();


        $local = 'gambar/'.$row['image'];
        if(file_exists($local)){
            unlink('gambar/'.$row['image']);
        }

        $tmp = $_FILES['image']['tmp_name'];
        $nameImage = $_FILES['image']['name'];
        $size = $_FILES['image']['size'];
        $err = $_FILES['image']['error'];
        
        $tipe_gambar = strtolower(pathinfo($nameImage,PATHINFO_EXTENSION));
        $nameImage = uniqid();
        $namabaru = $nameImage.'.'.$tipe_gambar;

        move_uploaded_file($tmp,'gambar/'.$namabaru);

        $query = "UPDATE products SET name=?, image=?, image_type=?,price=?,shade=? WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssdsd", $nama, $namabaru, $type, $price, $shade, $id);
        $stmt->execute();
        header('Location: view_product.php');
    }
        
        
        
    //     $stmt->close();
} else {
    header('Location: editcart.php');
}



?>