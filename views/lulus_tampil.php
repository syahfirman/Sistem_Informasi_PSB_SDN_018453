<?php
if(!isset($_SESSION ['level'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Pendaftar Lulus</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                 <th>No</th>
                                   <th>Nama</th>
                                   <th>Tanggal Lahir</th>
                                   <th>Tempat Lahir</th>
                                   <th>Jenis Kelamain</th>
                                   <th>Agama</th>
                                   <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_pendaftar where id_status='Lulus'";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <th><?php echo $data['nmsiswa'] ?></th>
                                    <th><?php echo $data['tgllahir'] ?></th>
                                    <th><?php echo $data['tempatlahir'] ?></th>
                                    <th><?php echo $data['jk'] ?></th>
                                    <th><?php echo $data['agama'] ?></th>
                                    <th><?php echo $data['id_status'] ?></th>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

