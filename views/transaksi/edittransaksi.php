<?php 
    @$id = $_GET['id'];

    $sql    = "select * from tabel_transaksi where id_transaksi=$id";
    $show   = $db->query($sql);
    $hasil  = mysqli_fetch_assoc($show);

   
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data transaksi</h4>
                        <br>
                        <form action="model/transaksi/prosesupdatetransaksi.php" method="POST">
                            <input type="hidden" name="id_transaksi" id="id_transaksi"
                                value="<?php echo $hasil['id_transaksi']?>">
                            <table class="table">
                            <tr>
                                    <td>tanggal transaksi</td>
                                    <td>:</td>
                                    <td><input type="date" class="form-control" name="tanggal_transaksi" id="tanggal_transaksi"
                                            value="<?php echo $hasil['tanggal_transaksi']?>"></td>
                                </tr>
                                <tr>
                                    <td>id anggota</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="id_anggota" id="id_anggota"
                                            value="<?php echo $hasil['id_anggota']?>"></td>
                                </tr>                               
                                <tr>
                                    <td>id pegawai</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="id_pegawai" id="id_pegawai"
                                            value="<?php echo $hasil['id_pegawai']?>"></td>
                                </tr>
                                <tr>
                                    <td>id buku</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="id_buku" id="id_buku"
                                            value="<?php echo $hasil['id_buku']?>"></td>
                                </tr>
                                <tr>
                                    <td>quantity</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="quantity" id="quantity"
                                            value="<?php echo $hasil['quantity']?>"></td>
                                </tr>
                                <tr>
                                    <td>jenis transaksi</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="jenis_transaksi" id="jenis_transaksi"
                                            value="<?php echo $hasil['jenis_transaksi']?>"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-dark" value="Update">
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