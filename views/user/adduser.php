<?php
    $pegawai = "select id_pegawai , nama_pegawai from tabel_pegawai";
    $showpegawai = $db->query($pegawai);
?>  
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data User</h4>
                        <br>
                        <form action="model/user/prosesadduser.php" method="POST">
                            <table class="table">
                                <tr>
                                <td>Nama pegawai</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="id_pegawai" id="id_pegawai">
                                            <?php foreach ($showpegawai as $pgw) : ?>
                                                <option  value="<?php echo $pgw['id_pegawai']?>"><?php echo $pgw['nama_pegawai']?></option>
                                            <?php endforeach;?>
                                        </select>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="username" id="username">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="password" id="password">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Level</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="level" id="level">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dibuat Pada</td>
                                    <td>:</td>
                                    <td><input type="date" class="form-control" name="dibuatpada" id="dibuatpada">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn- btn-secondary" value="Simpan" >
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