<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data Buku</h4>
                        <br>
                        <form action="model/buku/prosesaddbuku.php" method="POST">
                            <table class="table">
                                
                            <tr>
                                    <td>ISBN</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="isbn" id="isbn">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Judul</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="judul" id="judul">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Penulis</td>
                                    <td>:</td>
                                    <td><input type="varchar(50)" class="form-control" name="penulis" id="penulis">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Penerbit</td>
                                    <td>:</td>
                                    <td><input type="varchar(50)" class="form-control" name="penerbit" id="penerbit"></td>
                                </tr>
                                <tr>
                                    <td>Tahun Terbit</td>
                                    <td>:</td>
                                    <td><input type="year" class="form-control" name="tahun_terbit" id="tahun_terbit"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-secondary" value="Simpan">
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