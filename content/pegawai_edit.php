<?php
    if(!defined('INDEX')) die("");
    
    $query = mysqli_query($con, "SELECT * FROM pegawai WHERE id_pegawai='$_GET[id]'");
    $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit Pegawai <?= $data['nama_pegawai'] ?></h2>
<form action="?hal=pegawai_update" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?= $data['id_pegawai'] ?>">
    <div class="form-group">
        <label for="foto">Foto</label>
        <div class="input">
            <input type="file" id="foto" name="foto">
            <img src="images/<?= $data['foto'] ?>" width="150" alt="Foto User">
        </div>
    </div>

    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input">
            <input type="text" id="nama" name="nama" placeholder="Isikan nama anda..."  value="<?= $data['nama_pegawai'] ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <?php
            if($data['jenis_kelamin'] == "L") {
                $l = " checked";
                $p = "";
            } else {
                $l = "";
                $p = " checked";
            }
        ?>
        <input type="radio" id="jk" name="jk" value="L" <?= $l ?>> Laki-laki
        <input type="radio" id="jk" name="jk" value="P" <?= $p ?>> Perempuan
    </div>

    <div class="form-group">
        <label for="tanggal">Tanggal Lahir</label>
        <div class="input">
            <input type="date" id="tanggal" name="tanggal" value="<?= $data['tgl_lahir'] ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <div class="input">
            <select name="jabatan" id="jabatan">
                <option value="">
                    -Pilih Jabatan-
                </option>
                <?php
                    $queryjabatan = mysqli_query($con, "SELECT * FROM jabatan");
                    while($j = mysqli_fetch_array($queryjabatan)) {
                        echo "<option value='$j[id_jabatan]'";
                        if($j['id_jabatan'] == $data['id_jabatan']) echo " selected";
                        echo ">$j[nama_jabatan]</option>";
                    }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <div class="input">
            <textarea name="keterangan" id="keterangan" cols="50" rows="5">
                <?= $data['keterangan'] ?>>
            </textarea>
        </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="reset" value="Batal" class="tombol reset">
    </div>
</form>