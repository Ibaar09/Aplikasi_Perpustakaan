
<?php 
    @$id = $_GET['id'];

    $sql    = "select * from tabel_pegawai where id_pegawai=$id";
    $show   = $db->query($sql);
    $hasil  = mysqli_fetch_assoc($show);

    $jk = $hasil['jenis_kelamin'];
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data Pegawai</h4>
                        <br>
                        <form action="model/pegawai/prosesupdatepegawai.php" method="POST">
                            <input type="hidden" name="id_pegawai" id="id_pegawai" value="<?php echo $hasil['id_pegawai']?>">
                            <table class="table">
                                <tr>
                                    <td>Nama Pegawai</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="nama_pegawai" id="nama_pegawai" value="<?php echo $hasil['nama_pegawai']?>"></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                            <option value="L" <?php if($jk=='l'){ echo"selected"; } ?> >Laki Laki</option>
                                            <option value="P" <?php if($jk=='p'){ echo"selected"; } ?>>Perempuan</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="alamat" id="alamat" cols="10" rows="6"><?php echo  $hasil['alamat']?></textarea></td>
                                </tr>
                                <tr>
                                    <td>No Hp</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="no_hp" id="no_hp" value="<?php echo $hasil['no_hp']?>"></td>
                                </tr>
                                <tr>
                                    <td>Jabatan</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="jabatan" id="jabatan" value="<?php echo $hasil['jabatan']?>"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-secondary" value="Update">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>