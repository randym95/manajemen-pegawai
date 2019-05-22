<?php
    if(!defined('INDEX')) die("");    
?>

<h4 class="mt-4 pb-2">Tambah Pegawai</h4>
<hr>
<form action="?hal=pegawai_insert" method="POST" enctype="multipart/form-data" class="mb-5">

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="foto">Foto</label>
        <div class="col-sm-4">
            <div class="custom-file">
                <label for="foto" class="custom-file-label"></label>
                <input type="file" id="foto" name="foto" class="custom-file-input">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-4">
            <input type="text" id="nama" class="form-control" name="nama" placeholder="Isikan nama anda...">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="jk">Jenis Kelamin</label>
        <div class="col-sm-4">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="jk" name="jk" value="L" class="custom-control-input"> 
                <label class="custom-control-label" for="jkl">
                    Laki-laki
                </label> 
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="jk" name="jk" value="P" class="custom-control-input"> 
                <label class="custom-control-label" for="jkp">Perempuan</label>
            </div>
            
        </div>
    </div>

    <div class="form-group row">
        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-2">
            <input type="text" id="tanggal" name="tanggal" class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
        <div class="col-sm-4">
            <select class="custom-select" name="jabatan" id="jabatan">
                <option value="">
                    -Pilih Jabatan-
                </option>
                <?php
                    $queryjabatan = mysqli_query($con, "SELECT * FROM jabatan");
                    while($j = mysqli_fetch_array($queryjabatan)) {
                        echo "<option value='$j[id_jabatan]'>
                                $j[nama_jabatan]
                            </option>";
                    }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-8">
            <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
        </div>
    </div>

    <button type="submit" class="btn btn-info">
        <i class="oi oi-task"></i>
        Simpan
    </button>
    <button type="reset" class="btn btn-danger">
        <i class="oi oi-circle-x"></i>
        Batal
    </button>
   
</form>