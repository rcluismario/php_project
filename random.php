<?php

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

include 'db_connection.php';
$conn = OpenCon();

$min = 0;
$max = 99;
$prob = rand($min, $max);
if($prob == 0 or $prob == 1){

    $product = $_POST['producto'];
    $warehouse = $_POST['almacen'];
    $stock = $_POST['unidades'];
    $date = " " + 4 + " ";
    $price = $_POST['importe'];

}else{

    $product = $_POST['producto'];
    $warehouse = $_POST['almacen'];
    $stock = $_POST['unidades'];
    $date = $_POST['fecha'];
    $price = $_POST['importe'];

}

if (isset($product) && isset($warehouse) && isset($stock) && isset($date) && isset($price)) {
    $insert = "INSERT INTO product(producto, almacen, unidades, fecha_venta, importe) VALUES ('$product', '$warehouse', '$stock', '$date', '$price')";
    $result = mysqli_query($conn, $insert);
    if (!$result) {
        echo 'Error recorded values.';
    }
}
CloseCon($conn);
header("Content-Type: text/html;charset=utf-8");
header("Location:index.php");
?>