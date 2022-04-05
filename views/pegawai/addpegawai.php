<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-1">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data Pegawai</h4>
                        <br>
                        <form action="model/pegawai/prosesaddpegawai.php" method="POST">
                            <table class="table">
                                <tr>
                                    <td>Nama Pegawai</td>
                                    <td>:</td>
                                    <td><input type="varchar" class="form-control" maxlength="50" name="nama_pegawai" id="nama_pegawai">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                            <option value="l">Laki Laki</option>
                                            <option value="p">Perempuan</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="alamat" id="alamat" cols="10"
                                            rows="6"></textarea></td>
                                </tr>
                                <tr>
                                    <td>No Hp</td>
                                    <td>:</td>
                                    <td><input type="varchar" class="form-control" maxlength="20" name="no_hp" id="no_hp"></td>
                                </tr>                                
                                <tr>
                                    <td>Jabatan</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="jabatan" id="jabatan">
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