<select name="barang">
            <?php
            $barang = array("mie instan", "sabun mandi", "shampo", "sandal jepit", "roti", "buku tulis", "susu kotak", "minyak goreng", "ice cream", "baterai");
            foreach ($barang as $bar) {
                echo "<option value='$barang'> $bar</option>";
                echo "<br>";
            }
            $harga=0;
            if ($kategori == "karyailmiah") {
                $harga = 10000;
            }
            ?>
