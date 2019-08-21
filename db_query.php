<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fabric</title>
</head>

<body>
    <h1>Product Query</h1>
    <?php
    include 'db_connection.php';
    $conn = OpenCon();
    echo '<pre>';
    echo "Connected Successfully\n\n";
    echo "------------------------------------------------------------------\n";
    echo "| Producto | Almacen | Unidades | Fecha de venta |    Importe    |\n";
    $Product_table = "SELECT * FROM product";
    if ($res_table = $conn->query($Product_table)) {
        /* fetch object array */
        while ($row = $res_table->fetch_row()) {
            echo "------------------------------------------------------------------\n";
            printf("| %s  |    %d    |   %d   |   %s   |   %lf   |\n", $row[0], $row[1], $row[2], $row[3], $row[4]);
        }
        echo "------------------------------------------------------------------\n";
        echo '</pre>';
        /* free result set */
        $res_table->close();
    }
    CloseCon($conn);
    ?>
</body>

</html>