<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pendaftar</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_pendaftar WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pendaftaran Siswa SDN 018453 Siumbut Umbut </h2>
                        <h4> Jln Budi Utomo No. 78, Kisaran, Siumbut - Umbut, Kisaran Timur <br>Kabupaten Asahan, Sumatera Utara, Kode Pos : 21225</h4>
                        <hr>
                        <h3>DATA PENDAFTAR</h3>
                    </div>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nama Siswa</td> <td><?= $data['nmsiswa'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Tanggal Lahir</td> <td><?= $data['tgllahir'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td> <td><?= $data['tempatlahir'] ?></td>
                                </tr>
								<tr>
                                    <td>Jenis Kelamin</td> <td><?= $data['jk'] ?></td>
                                </tr>
								<tr>
                                    <td>Agama</td> <td><?= $data['agama'] ?></td>
                                </tr>
								<tr>
                                    <td>Nama Ayah/Ibu</td> <td><?= $data['nmortu'] ?></td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td> <td><?= $data['pekerjaan'] ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br>
                                        Ketua Panitia Prndaftaran
                                        <br><br><br><br>
                                        <u>Eni Mariati S.pd<strong></u><br>
                                        NIP.196501261986042001
									</td>
								</tr>
							</tfoot> 
                        </table>
                </div>
            </div>
               <script>
        window.print();
    </script>
    </body>
</html>