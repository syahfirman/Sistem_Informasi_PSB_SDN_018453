<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Pendaftar</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pendaftaran Siswa SDN 018453 Siumbut Umbut </h2>
                        <h4> Jln Budi Utomo No. 78, Kisaran, Siumbut - Umbut, Kisaran Timur <br>Kabupaten Asahan, Sumatera Utara, Kode Pos : 21225</h4>
                        <hr>
                        <h3>DATA SELURUH PENDAFTAR</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
								<th>No</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Tempat Lahir</th>
                                <th>Jenis Kelamain</th>
                                <th>Agama</th>
                                <th>Nama Ayah/Ibu</th>
                                <th>Pekerjaan</th>
                                <th>Alamat</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_pendaftar";
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
									<td><?= $data['nmsiswa'] ?></td>
                                    <td><?= $data['tgllahir'] ?></td>
                                    <td><?= $data['tempatlahir'] ?></td>
                                    <td><?= $data['jk'] ?></td>
                                    <td><?= $data['agama'] ?></td>
                                    <td><?= $data['nmortu'] ?></td>
                                    <td><?= $data['pekerjaan'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="9" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br>
                                        Kepala Sekolah
                                        <br><br><br><br>
                                        <u>Eni Mariati S.pd<strong></u><br>
                                        NIP.196501261986042001
                                    </td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
             <script>
        window.print();
    </script>
    </body>
</html>