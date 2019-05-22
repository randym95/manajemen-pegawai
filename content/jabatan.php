<?php
    if(!defined('INDEX')) die("");
?>

<h4 class="mt-4 pb-2">Data Jabatan</h4>
<a href="?hal=jabatan_tambah" class="btn btn-success">
    <i class="oi oi-plus"></i>
    Tambah
</a>

<div class="table-responsive mt-3">
    <table class="table table-striped table-hover table-borderred">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $query = mysqli_query($con, "SELECT * FROM jabatan ORDER BY id_jabatan DESC");
            $no = 0;
            while($data = mysqli_fetch_array($query)) {
                $no++;
        ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data['nama_jabatan'] ?></td>
                <td>
                    <a href="?hal=jabatan_edit&id=<?= $data['id_jabatan'] ?>" class="btn btn-info btn-sm">
                        <i class="oi oi-pencil"></i>
                        Edit
                    </a>
                    <a href="?hal=jabatan_hapus&id=<?= $data['id_jabatan'] ?>" class="btn btn-danger btn-sm">
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