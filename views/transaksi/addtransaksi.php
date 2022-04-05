<?php
    $anggota = "select id_anggota , nama_anggota from tabel_anggota";
    $showanggota = $db->query($anggota);

    $pegawai = "select id_pegawai , nama_pegawai from tabel_pegawai";
    $showpegawai = $db->query($pegawai);

    $buku = "select id_buku , judul from tabel_buku";
    $showbuku = $db->query($buku);

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data Transaksi</h4>
                        <br>
                        <form action="model/transaksi/prosesaddtransaksi.php" method="POST">
                            <table class="table">
                                <tr>
                                    <td>Tanggal Transaksi</td>
                                    <td>:</td>
                                    <td><input type="date"  class="form-control" name="tanggal_transaksi" id="tanggal_transaksi"></td>
                                </tr>
                                <tr>
                                    <td>nama anggota</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="id_anggota" id="id_anggota">
                                            <?php foreach ($showanggota as $agt) : ?>
                                                <option value="<?php echo $agt['id_anggota']?>"><?php echo $agt['nama_anggota']?></option>
                                            <?php endforeach;?>
                                        </select>
                                        
                                </tr>
                                <tr>
                                    <td>nama pegawai</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="id_pegawai" id="id_pegawai">
                                            <?php foreach ($showpegawai as $pgw) : ?>
                                                <option  value="<?php echo $pgw['id_pegawai']?>"><?php echo $pgw['nama_pegawai']?></option>
                                            <?php endforeach;?>
                                        </select>
                                </tr>
                                <tr>
                                    <td>nama buku</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="id_buku" id="id_buku">
                                            <?php foreach ($showbuku as $bk) : ?>
                                                <option value="<?php echo $bk['id_buku']?>"><?php echo $bk['judul']?></option>
                                            <?php endforeach;?>
                                        </select>
                                </tr>
                                <tr>
                                    <td>quantity</td>
                                    <td>:</td>
                                    <td><input type="int"  class="form-control" name="quantity" id="quantity"></td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenis transaksi</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="jenis_transaksi" id="jenis_transaksi">
                                            <option value="pinjam">pinjam</option>
                                            <option value="kembali">kembali</option>
                                        </select>
                                    </td>
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