<?php
require_once "config.php";

$id = $_GET['id'];


$quey="SELECT image FROM products WHERE id = ?";
$res = $conn->prepare($quey);
$res->bind_param("d", $id);
$res->execute();
$r = $res->get_result();
$row = $r->fetch_assoc();

$query="DELETE FROM products WHERE id = $id";
$res = $conn->prepare($query);
$res->execute();

if ($res->affected_rows > 0) {
    $local = 'gambar/'.$row['image'];
    if(file_exists($local)){
        unlink('gambar/'.$row['image']);
    }
    header('Location: view_product.php');
} else {
    var_dump($_GET);
    echo "gagal dihapus";
}
?>