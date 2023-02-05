<?php
// Create database connection using config file
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM barang ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
    <a href="add.php">Tambah Barang</a><br/><br/>
    
    <a href="belanja.php">Belanja Barang</a><br/><br/>
    
    <a href="dashboard.php">Dashboard Penjualan</a><br/><br/>

    <table width='80%' border=1>
 
    <tr>
        <th>Nama Barang</th> <th>Keterangan</th> <th>Satuan</th> <th>Harga Beli</th> <th>Harga Jual</th> <th>Update</th>
    </tr>
    <?php  
    while($data_barang = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data_barang['nama_barang']."</td>";
        echo "<td>".$data_barang['keterangan']."</td>";
        echo "<td>".$data_barang['satuan']."</td>";    
        echo "<td>".$data_barang['harga_beli']."</td>";    
        echo "<td>".$data_barang['harga_jual']."</td>";    
        echo "<td><a href='edit.php?id=$data_barang[id]'>Edit</a> 
        | <a href='delete.php?id=$data_barang[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>