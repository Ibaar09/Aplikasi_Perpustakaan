<?php 
    @$id = $_GET['id'];

    $sql    = "select * from tabel_user where id_user=$id";
    $show   = $db->query($sql);
    $hasil  = mysqli_fetch_assoc($show);

    $jk = $hasil['id_pegawai'];
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-1">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data User</h4>
                        <br>
                        <form action="model/user/prosesupdateuser.php" method="POST">
                            <input type="hidden" name="id_user" id="id_user" value="<?php echo $hasil['id_user']?>">   
                            <table class="table">
                                <tr>
                                    <td>Nama Pegawai</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="id_pegawai" id="id_pegawai" value="<?php echo $hasil['id_pegawai']?>">
                                    </td>
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="username" id="username" value="<?php echo $hasil['username']?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="password" id="password" value="<?php echo $hasil['password']?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Level</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="level" id="level" value="<?php echo $hasil['level']?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dibuat Pada</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="dibuatpada" id="dibuatpada" value="<?php echo $hasil['dibuatpada']?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn- btn-secondary" value="Update" >
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