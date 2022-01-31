<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_pendaftar WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pendaftar</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nmsiswa" class="col-sm-3 control-label">Nama Siswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="nmsiswa" value="<?=$data['nmsiswa']?>"class="form-control" id="inputEmail3" placeholder="Nama Siswa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgllahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgllahir" value="<?=$data['tgllahir']?>"class="form-control" id="inputEmail3" placeholder="Tanggal Lahir">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tempatlahir" class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempatlahir" value="<?=$data['tempatlahir']?>" class="form-control" id="inputEmail3" placeholder="Tempat Lahir">
                            </div>
                        </div>
                       <div class="form-group">
                            <label for="jk" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jk" value="<?=$data['jk']?>" class="form-control" id="inputEmail3" placeholder="Jenis Kelamin">
                            </div>
                        </div>
						  <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="agama" value="<?=$data['agama']?>" class="form-control" id="inputEmail3" placeholder="Agama">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nmortu" class="col-sm-3 control-label">Nama Ayah/ Ibu</label>
                            <div class="col-sm-9">
                                <input type="text" name="nmortu" value="<?=$data['nmortu']?>"class="form-control" id="inputEmail3" placeholder="Nama Ayah/Ibu">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="pekerjaan" class="col-sm-3 control-label">Pekerjaan</label>
                            <div class="col-sm-9">
                                <input type="text" name="pekerjaan" value="<?=$data['pekerjaan']?>"class="form-control" id="inputEmail3" placeholder="pekerjaan" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nohp" class="col-sm-3 control-label">No Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" name="nohp" value="<?=$data['nohp']?>"class="form-control" id="inputEmail3" placeholder="No Telepon" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nowa" class="col-sm-3 control-label">No Whatsapp</label>
                            <div class="col-sm-9">
                                <input type="text" name="nowa" value="<?=$data['nowa']?>"class="form-control" id="inputEmail3" placeholder="No Whatsapp" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nowa" class="col-sm-3 control-label">No Whatsapp</label>
                            <div class="col-sm-9">
                                <input type="text" name="nowa" value="<?=$data['nowa']?>"class="form-control" id="inputEmail3" placeholder="No Whatsapp" >
                            </div>
                        </div>              

                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="alamat" id="inputEmail3"><?php echo $data['alamat'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="status" id="status" required="required">
                                    <option>-Pilih Satatus-</option>
                                    <?php
                                    $sql = mysqli_query($koneksi, "SELECT * FROM status") or die
                                    (mysqli_error($koneksi));
                                    while($status = mysqli_fetch_array($sql)){
                                    echo '<option value="'.$status['status'].'">'.$status['status'].'</option>';} ?>
                                </select>   
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pendaftar</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <a href="?page=pendaftar&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pendaftar
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
    $status = $_POST['status'];
    //buat sql
    $sql="UPDATE tbl_pendaftar SET nmsiswa='$nmsiswa',tgllahir='$tgllahir',tempatlahir='$tempatlahir',jk='$jk',agama='$agama',nmortu='$nmortu',pekerjaan='$pekerjaan',nohp='$nohp',nowa='$nowa',alamat='$alamat',id_status='$status' 
        WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=pendaftar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



