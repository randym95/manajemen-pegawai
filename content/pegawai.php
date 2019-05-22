<?php
    if(!defined('INDEX')) die("");
?>
<h4 class="mt-4 pb-2">Data Pegawai</h4>
<hr>
<a href="?hal=pegawai_tambah" class="btn btn-success">
    <i class="oi oi-plus"></i>
    Tambah
</a>
<div class="table-responsive mt-3">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <td>No.</td>
                <td>Foto</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>Tanggal Lahir</td>
                <td>Jabatan</td>
                <td>Keterangan</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
        
            <?php
                $query = mysqli_query($con, "SELECT * FROM pegawai LEFT JOIN jabatan ON pegawai.id_jabatan = jabatan.id_jabatan ORDER BY pegawai.id_pegawai DESC");
                $no = 0;
                while($data = mysqli_fetch_array($query)) {
                    $no++;
            ?>

            <tr>
                <td><?= $no ?></td>
                <td><img src="images/<?= $data['foto'] ?>" width="100" alt="Foto User"></td>
                <td><?= $data['nama_pegawai'] ?></td>
                <td><?= $data['jenis_kelamin'] ?></td>
                <td><?= $data['tgl_lahir'] ?></td>
                <td><?= $data['nama_jabatan'] ?></td>
                <td><?= $data['keterangan'] ?></td>
                <td>
                    <a href="?hal=pegawai_edit&id=<?= $data['id_pegawai'] ?>" class="btn btn-info btn-sm">
                        <i class="oi oi-pencil"></i>
                        Edit
                    </a>
                    <a href="?hal=pegawai_hapus&id=<?= $data['id_pegawai'] ?>&foto=<?= $data['foto'] ?>" class="btn btn-danger btn-sm">
                        <i class="oi oi-trash"></i>
                        Hapus
                    </a>
                </td>
            </tr>
            
            <?php
                }
            ?>

        </tbody>
    </table>
</div>