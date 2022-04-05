<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Transaksi</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Data Transaksi
                <a href="beranda.php?page=transaksi&aksi=add">
                    <button class="btn btn-secondary">Tambah data</button>
                </a> </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>tanggal_transaksi</th>
                        <th>Nama_anggota</th>
                        <th>Nama_pegawai</th>
                        <th>Nama_buku</th>
                        <th>quantity</th>
                        <th>jenis_transaksi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>tanggal_transaksi</th>
                        <th>Nama_anggota</th>
                        <th>Nama_pegawai</th>
                        <th>Nama_buku</th>
                        <th>quantity</th>
                        <th>jenis_transaksi</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                                                
                    $sql = "select * from tabel_transaksi tt left join tabel_anggota ta on tt.id_anggota = ta.id_anggota 
                    left join tabel_pegawai tp on tt.id_pegawai = tp.id_pegawai 
                    left join tabel_buku tb on tt.id_buku = tb.id_buku  ";
                    
                    $show = $db->query($sql);
                    foreach($show as $agt):
                ?>
                    <tr>
                        <td><?php echo $agt["tanggal_transaksi"]?></td>
                        <td><?php echo $agt["nama_anggota"]?></td>
                        <td><?php echo $agt["nama_pegawai"]?></td>
                        <td><?php echo $agt["judul"]?></td>
                        <td><?php echo $agt["quantity"]?></td>
                        <td><?php echo $agt["jenis_transaksi"]?></td>
                        <td>
                            <a href="beranda.php?page=transaksi&aksi=edit&id=<?php echo $agt['id_transaksi']?>"
                                class="btn btn-secondary btn-circle">
                                <i class="fas fa-edit"></i>
                            </a>

                            <a href="model/transaksi/prosesdeletetransaksi.php?id=<?php echo $agt['id_transaksi']?>"
                                class="btn btn-danger btn-circle">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>