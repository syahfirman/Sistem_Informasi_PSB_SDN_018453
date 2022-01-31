<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pendaftar</h3>
                </div>
                <div class="panel-body">
    <form class="form-horizontal" method="post" action="">
    <div class="row">
    
        <div class="col-lg-6">
        <h3>Data Pribadi Calon Siswa</h3>
        <hr>
            <div class="form-group">
                <label class="control-label col-sm-4">Nama Lengkap :</label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" name="nmsiswa" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4">Tanggal Lahir :</label>
                <div class="col-sm-8">
                    <input class="form-control" type="date" name="tgllahir" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4">Tempat Lahir :</label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" name="tempatlahir" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4">Jenis Kelamin :</label>
                <div class="col-sm-8">
                    <select class="form-control" name="jk" required>
                    <option >---</option>
                    <option >Laki laki</option>
                    <option >Perempuan</option>
                </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4">Agama :</label>
                <div class="col-sm-8">
                    <select class="form-control" name="agama" required>
                    <option >---</option>
                    <option >Islam</option>
                    <option >Kristen</option>
                    <option>Hindu</option>
                    <option>Buddha</option>
                </select>
                </div>
            </div>
        </div> 

        <div class="col-lg-6">
        <h3 >Data Orang Tua siswa</h3>
        <hr>
            <div class="form-group">
                <label class="control-label col-sm-4">Nama Ayah / Ibu :</label>
                <div class="col-sm-8">
                   <input class="form-control" type="text" name="nmortu" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4">Pekerjaan:</label>
                <div class="col-sm-8">
                   <input class="form-control" type="text" name="pekerjaan" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4">No. Telepon :</label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" name="nohp" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4">No. Whatsapp :</label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" name="nowa" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4">Alamat:</label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="alamat" required></textarea>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="box-footer" style="margin-top: 50px" align="right">
                <input class="btn btn-success" type="submit" name="submit" value="simpan">
            </div><!-- /.box-footer -->
        </div>  
    </div>
    </form>
    <br>
</div>

                </div>
                <div class="panel-footer">
                    <a href="?page=pendaftar&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali ke Data Pendaftar
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nmsiswa = $_POST['nmsiswa'];
    $tgllahir = $_POST['tgllahir'];
    $tempatlahir = $_POST['tempatlahir'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $nmortu = $_POST['nmortu'];
    $pekerjaan = $_POST['pekerjaan'];
    $nohp = $_POST['nohp'];
    $nowa = $_POST['nowa'];
    $alamat = $_POST['alamat'];
    $status = 'Aktif';
    //buat sql
    $sql="INSERT INTO tbl_pendaftar VALUES ('','$nmsiswa','$tgllahir','$tempatlahir','$jk','$agama','$nmortu','$pekerjaan','$nohp','$nowa','$alamat','$status')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=pendaftar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>