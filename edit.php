<?php
include_once("config.php");
 
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $nama_barang=$_POST['nama_barang'];
    $keterangan=$_POST['keterangan'];
    $satuan=$_POST['satuan'];
    $harga_beli=$_POST['harga_beli'];
    $harga_jual=$_POST['harga_jual'];
        
    $result = mysqli_query($mysqli, "UPDATE barang SET nama_barang='$nama_barang',keterangan='$keterangan',satuan='$satuan', harga_beli='$harga_beli',harga_jual='$harga_jual' WHERE id=$id");
    
    header("Location: index.php");
}

?>
<?php
$id = $_GET['id'];
 
$result = mysqli_query($mysqli, "SELECT * FROM barang WHERE id=$id");
 
while($data_barang = mysqli_fetch_array($result))
{
    $nama_barang = $data_barang['nama_barang'];
    $keterangan = $data_barang['keterangan'];
    $satuan = $data_barang['satuan'];
    $harga_beli = $data_barang['harga_beli'];
    $harga_jual = $data_barang['harga_jual'];
}
?>
<html>
<head>	
    <title>Edit Barang</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" value=<?php echo $nama_barang;?>></td>
            </tr>
            <tr> 
                <td>Keterangan</td>
                <td><input type="text" name="keterangan" value=<?php echo $keterangan;?>></td>
            </tr>
            <tr> 
                <td>Satuan</td>
                <td><input type="number" name="satuan" value=<?php echo $satuan;?>></td>
            </tr>
            <tr> 
                <td>Harga Beli</td>
                <td><input type="number" name="harga_beli" value=<?php echo $harga_beli;?>></td>
            </tr>
            <tr> 
                <td>Harga Jual</td>
                <td><input type="number" name="harga_jual" value=<?php echo $harga_jual;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>