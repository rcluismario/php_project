<?php

include 'db_connection.php';
$conn = OpenCon();

$product = $_POST['producto'];
$warehouse = $_POST['almacen'];
$stock = $_POST['unidades'];
$date = $_POST['fecha'];
$price = $_POST['importe'];

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