<?php
include_once("config.php");

$all_barang = mysqli_query($mysqli, "SELECT nama_barang FROM barang");
?>

<html>
<head>
    <title>Belanja Barang</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form method="POST">
        <label>Pilih Barang : </label>
        <select name="Barang">
            <?php
                while ($barang = mysqli_fetch_array(
                        $all_barang,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $barang["nama_barang"];?>">
                    <?php echo $barang["nama_barang"];?>
                </option>
            <?php
                endwhile;
            ?>
        </select>
        </br>
        <label>Satuan:</label>
        <input type="number" name="satuan" required><br>
        </br>
        <input type="submit" name="Submit" value="Beli Barang">
    </form>

    <?php
     if(isset($_POST['Submit'])) {
      $nama_barang = $_POST['Barang'];
      $satuan = $_POST['satuan'];    


      include_once("config.php");
                  
      $result = mysqli_query($mysqli, "INSERT INTO belanja(nama_barang,satuan) VALUES('$nama_barang','$satuan')");

      echo "Barang Berhasil dibeli.";

     } 

    ?>
</body>
</html>