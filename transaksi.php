<?php
include "header.php"
?>

<?php
if(isset($_POST['btnSubmit'])){
    $kode = $_POST["kode"];
    $tgl = $_POST["tanggal"];
    $customer = $_POST["customer"];
   
  

    echo "kode transaksi : $kode<br>";
    echo "tanggal transaksi:  $tgl<br>";
    echo "customer :  $customer<br>";
    
}
else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <form action="" method="post">
        kode transaksi : <input type="text" name="kode"><br>
        tanggal transaksi : <input type="date" name="tanggal"><br>
        customer : <select name="customer">
            <option value="" selected></option>
            <option value="safa" selected>safa</option>
            <option value="hawa" selected>hawa</option>
            <option value="ida" selected>ida</option>
            <option value="tia" selected>tia</option>
            <option value="marwa" selected>marwa</option><br>
        </select><br>
        barang 1 :
        <?php
        include 'hargabarang.php';
        ?>
        <input type="number" name="banyak"><br>
        barang 2 :
        <?php
        include 'hargabarang.php';
        ?>
        <input type="number" name="banyak"><br>
        barang 3 :
        <?php
        include 'hargabarang.php';
        ?>
        <input type="number" name="banyak"><br>
        punya kartu member: <input type="radio" name="member" value="Ya">Ya
        <input type="radio" name="subject" value="tidak">tidak<br>
        uang pembayaran : <input type="text" name="bayar"><br>

        <input name="btnSubmit" value="Simpan" type="submit" />
        <input name="btnCancel" value="batal" type="reset" />
    </form>
</body>
</html>
<?php
}
?>