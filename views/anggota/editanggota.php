
<?php 
    @$id = $_GET['id'];

    $sql    = "select * from tabel_anggota where id_anggota=$id";
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
                        <h4>Edit Data Anggota</h4>
                        <br>
                        <form action="model/anggota/prosesupdateanggota.php" method="POST">
                            <input type="hidden" name="id_anggota" id="id_anggota" value="<?php echo $hasil['id_anggota']?>">
                            <table class="table">
                                <tr>
                                    <td>Nama Anggota</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="nama_anggota" id="nama_anggota" value="<?php echo $hasil['nama_anggota']?>"></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                            <option value="l" <?php if($jk=='L'){ echo"selected"; } ?> >Laki Laki</option>
                                            <option value="p" <?php if($jk=='P'){ echo"selected"; } ?>>Perempuan</option>
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