<?php
// Create database connection using config file
include_once("config.php");

$resultBelanja = mysqli_query($mysqli, "SELECT * FROM belanja");
$resultBarang = mysqli_query($mysqli, "SELECT * FROM barang");
?>

<html>
<head>
    <title>Dashboard Penjualan</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <table width='80%' border=1>
 
    <tr>
        <th>Nama Barang</th> <th>Satuan</th> <th>Laba (Keuntungan)</th>
    </tr>
    <?php  
    
    $data_barang = mysqli_fetch_array($resultBarang);
    while($data_belanja = mysqli_fetch_array($resultBelanja)) {         
        echo "<tr>";
        echo "<td>".$data_belanja['nama_barang']."</td>";
        echo "<td>".$data_belanja['satuan']."</td>";
        $laba = ($data_barang['harga_jual'] - $data_barang['harga_beli']) * $data_belanja['satuan'];
        echo "<td>".$laba."</td>";
    }
    ?>
    </table>
</body>
</html>