<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pendaftar</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_pendaftar WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nama Siswa</td> <td><?= $data['nmsiswa'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td> <td><?= $data['tgllahir'] ?></td>
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
                            <td>No Handphone</td> <td><?= $data['nohp'] ?></td>
                        </tr>
                        <tr>
                            <td>No Whatsapp</td> <td><?= $data['nowa'] ?></td>
                        </tr>
						<tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>Status</td> <td><?= $data['id_status'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pendaftar&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pendaftar </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

