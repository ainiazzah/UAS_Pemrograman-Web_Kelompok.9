<?php 
$kategori = mysqli_query($mydb, "SELECT * FROM kategori");

// nama barang
$barang = mysqli_query($mydb, "SELECT * FROM barang b INNER JOIN kategori k ON b.id_kategori = k.id");
?>

<main>
    <div class="pembayaran"></div>
    <h3>PEMBAYARAN</h3>
    <label> kategori barang</label><br>
    <select class="form-control" name="" id="">
        <?php foreach ($kategori as $row) : ?>
            <option value="<?php echo($row['id']); ?>"><?php echo($row['nama']); ?></option>
        <?php endforeach; ?>
    </select><br>

    <label>nama barang</label><br>
    <select class="form-control" name="" id="">
        <?php foreach ($barang as $item) : ?>
            <option value="<?php echo($item['id_barang']); ?>"><?php echo($item['nama_barang']); ?></option>
        <?php endforeach; ?>
    </select><br>

    <label>harga</label><br>
    <input type="text" id="harga"><br>

    <label>jumlah</label><br>
    <input type="text" id="jumlah"><br>

    <label>total</label><br>
    <textarea id="total"></textarea><br>

    <label>diskon 3% setiap belanja >100.000</label><br>
    <textarea id="diskon"></textarea><br>

    <label>bayar</label><br>
    <textarea id="bayar"></textarea><br>
    <hr><br>
    
    <td><button onclick="proses()">proses</button></td>
    <td><button onclick="print()">Cetak Struk</button></td>
</main>