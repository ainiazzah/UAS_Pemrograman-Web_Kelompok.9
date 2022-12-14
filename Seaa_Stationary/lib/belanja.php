<!-- Content halaman belanja -->
<div class="contents">
    <h3>Daftar Barang</h3>

    <!-- Contents item buku -->
    <div class="contents-item text-center">
        <div class="contents-img">
            <img src="assets/images/buku.jpeg" width="250" height="250">
        </div>
        <p>BUKU</p>
    </div>

    <table class="table table-bordered">
        <thead>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </thead>

        <tbody>
            <?php
            $sql="select id_barang, nama_barang, harga, stok from barang where id_kategori = 1";
            $res=$mydb->query($sql);
            $i=0;
            while($row=$res->fetch_array()) {
                $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['nama_barang'] ?></td>
                <td><?php echo $row['harga'] ?></td>
                <td><?php echo $row['stok'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- /Contents item buku -->
    
    <!-- Contents item alat tulis -->
    <div class="contents-item text-center">
        <div class="contents-img">
            <img src="assets/images/alat tulis.jpeg" width="250" height="250">
        </div>
        <p>ALAT TULIS</p>
    </div>

    <table class="table table-bordered">
        <thead>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </thead>

        <tbody>
            <?php
            $sql="select id_barang, nama_barang, harga, stok from barang where id_kategori = 2";
            $res=$mydb->query($sql);
            $i=0;
            while($row=$res->fetch_array()) {
                $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['nama_barang'] ?></td>
                <td><?php echo $row['harga'] ?></td>
                <td><?php echo $row['stok'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- /Contents item alat tulis -->
    
    <!-- Contents item alat lukis -->
    <div class="contents-item text-center">
        <div class="contents-img">
            <img src="assets/images/alat lukis.jpeg" width="250" height="250">
        </div>
        <p>ALAT LUKIS</p>
    </div>

    <table class="table table-bordered">
        <thead>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </thead>

        <tbody>
            <?php
            $sql="select id_barang, nama_barang, harga, stok from barang where id_kategori = 3";
            $res=$mydb->query($sql);
            $i=0;
            while($row=$res->fetch_array()) {
                $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['nama_barang'] ?></td>
                <td><?php echo $row['harga'] ?></td>
                <td><?php echo $row['stok'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- /Contents item alat lukis -->
    
    <!-- Contents item elektronik -->
    <div class="contents-item text-center">
        <div class="contents-img">
            <img src="assets/images/elektronik.jpg" width="250" height="250">
        </div>
        <p>ELEKTRONIK</p>
    </div>

    <table class="table table-bordered">
        <thead>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </thead>

        <tbody>
            <?php
            $sql="select id_barang, nama_barang, harga, stok from barang where id_kategori = 4";
            $res=$mydb->query($sql);
            $i=0;
            while($row=$res->fetch_array()) {
                $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['nama_barang'] ?></td>
                <td><?php echo $row['harga'] ?></td>
                <td><?php echo $row['stok'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- /Contents item elektronik -->
    
    <!-- Contents item fashion -->
    <div class="contents-item text-center">
        <div class="contents-img">
            <img src="assets/images/fashion.jpg" width="250" height="250">
        </div>
        <p>FASHION</p>
    </div>

    <table class="table table-bordered">
        <thead>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </thead>

        <tbody>
            <?php
            $sql="select id_barang, nama_barang, harga, stok from barang where id_kategori = 5";
            $res=$mydb->query($sql);
            $i=0;
            while($row=$res->fetch_array()) {
                $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['nama_barang'] ?></td>
                <td><?php echo $row['harga'] ?></td>
                <td><?php echo $row['stok'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- /Contents item fashion -->

    <!-- Contents item lain-lain -->
    <div class="contents-item text-center">
        <div class="contents-img">
            <img src="assets/images/lainlain.jpg" width="250" height="250">
        </div>
        <p>LAIN-LAIN</p>
    </div>

    <table class="table table-bordered">
        <thead>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </thead>

        <tbody>
            <?php
            $sql="select id_barang, nama_barang, harga, stok from barang where id_kategori = 6";
            $res=$mydb->query($sql);
            $i=0;
            while($row=$res->fetch_array()) {
                $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['nama_barang'] ?></td>
                <td><?php echo $row['harga'] ?></td>
                <td><?php echo $row['stok'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- /Contents item lain-lain -->

</div>  
<!-- Content halaman belanja -->