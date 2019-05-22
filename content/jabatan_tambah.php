<?php
    if(!defined('INDEX')) die("");
?>

<h4 class="mt-4 pb-2">Tambah Jabatan</h4>
<hr>
<form action="?hal=jabatan_insert" method="POST">
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-4">
            <input type="text" id="nama" name="nama" class="form-control">
        </div>
    </div>

    <button type="submit" class="btn btn-info">
        <i class="oi oi-task"></i>
        Simpan
    </button>
    <button type="reset" class="btn btn-danger">
        <i class="oi oi-circle-x"></i>
        Simpan
    </button>

</form>