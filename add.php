<html>
<head>
    <title>Add Barang</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name Barang</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr> 
                <td>keterangan</td>
                <td><input type="text" name="keterangan"></td>
            </tr>
            <tr> 
                <td>Satuan</td>
                <td><input type="number" name="satuan"></td>
            </tr>
            <tr> 
                <td>Harga Beli</td>
                <td><input type="number" name="harga_beli"></td>
            </tr>
            <tr> 
                <td>Harga Jual</td>
                <td><input type="number" name="harga_jual"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    if(isset($_POST['Submit'])) {
        $nama_barang = $_POST['nama_barang'];
        $keterangan = $_POST['keterangan'];
        $satuan = $_POST['satuan'];
        $harga_beli = $_POST['harga_beli'];
        $harga_jual = $_POST['harga_jual'];
        
        include_once("config.php");
                
        $result = mysqli_query($mysqli, "INSERT INTO barang(nama_barang,keterangan,satuan, harga_beli, harga_jual) VALUES('$nama_barang','$keterangan','$satuan', '$harga_beli', '$harga_jual')");
        
        echo "Barang Berhasil ditambahkan. <a href='index.php'>Lihat Barang</a>";
    }
    ?>
</body>
</html>