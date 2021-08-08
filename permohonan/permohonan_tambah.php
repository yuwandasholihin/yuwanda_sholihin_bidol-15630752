<?php

if (isset($_POST['submit'])) {
    $tanggal      = $_POST['tanggal'];
    $instansi     = $_POST['instansi'];
    $nama     = $_POST['nama'];
    $alamat   = $_POST['alamat'];
    $kabupaten       = $_POST['kabupaten'];
    $kecamatan    = $_POST['kecamatan'];
    $kelurahan  = $_POST['kelurahan'];
    $telepon  = $_POST['telepon'];
    $email    = $_POST['email'];
    $alpukat     = $_POST['alpukat'];
    $cempedak   = $_POST['cempedak'];
    $durian      = $_POST['durian'];
    $jengkol    = $_POST['jengkol'];
    $langsat  = $_POST['langsat'];
    $matoa  = $_POST['matoa'];
    $petai  = $_POST['petai'];
    $rambutan  = $_POST['rambutan'];
    $sirsak  = $_POST['sirsak'];
    $angsana  = $_POST['angsana'];
    $kemiri  = $_POST['kemiri'];
    $mahoni  = $_POST['mahoni'];
    $ramania  = $_POST['ramania'];
    $ketapang  = $_POST['ketapan'];
    $sengon  = $_POST['sengon'];

    $result = mysqli_query($con, "INSERT INTO data_distribusi
            (tanggal,instansi,nama,alamat,kabupaten,kecamatan,kelurahan,telepon,email,alpukat,
            cempedak,durian,jengkol,langsat,matoa,petai,rambutan,sirsak,angsana,kemiri,mahoni,
            ramania,ketapang,sengon)
            VALUES('$tanggal','$instansi','$nama','$alamat','$kabupaten','$kecamatan','$kelurahan',
                '$telepon','$email','$alpukat','$cempedak','$durian','$jengkol','$langsat','$matoa',
                '$petai','$rambutan','$sirsak','$angsana','$kemiri','$mahoni','$ramania','$ketapang',
                '$sengon')") or die(mysqli_error($con));

    header("Location:?page=permohonan-show");
}
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Pengajuan Permohonan Bibit</strong>
            </div>

            <div class="card-body">
                <form method="POST" action="?page=permohonan-tambah" class="form-horizontal">

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="tanggal" class="control-label">Tanggal</label>
                            <input type="Date" class="form-control" name="tanggal" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="instansi" class="control-label">Instansi</label>
                            <input type="text" class="form-control" name="instansi" placeholder="Nama Instansi / Perseorangan..." required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="nama" class="ontrol-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Pemohon..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat" class="control-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat / Lokasi Tanam..." required>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="Kabupaten" class="control-label">Kabupaten</label>
                            <input type="text" class="form-control" name="kabupaten" placeholder="Kabupaten" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="kecamatan" class="control-label">Kecamatan</label>
                            <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="kelurahan" class="control-label">Kelurahan/Desa</label>
                            <input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan/Desa" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Masukan email...">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="telepon" class="control-label">Telepon</label>
                            <input type="number" class="form-control" name="telepon" placeholder="Masukan telepon..." required>
                        </div>
                    </div>

                    <div class="card-header">
                        <strong>Jenis Bibit</strong>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="alpukat" class="control-label">Alpukat</label>
                            <input type="number" class="form-control" name="alpukat" placeholder="Alpukat">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="cempedak" class="control-label">Cempedak/Nangka</label>
                            <input type="number" class="form-control" name="cempedak" placeholder="Cempedak/nangka">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="durian" class="control-label">Durian</label>
                            <input type="number" class="form-control" name="durian" placeholder="Durian">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="jengkol" class="control-label">Jengkol</label>
                            <input type="number" class="form-control" name="jengkol" placeholder="Jengkol">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="langsat" class="control-label">Langsat</label>
                            <input type="number" class="form-control" name="langsat" placeholder="Langsat">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="matoa" class="control-label">Matoa</label>
                            <input type="number" class="form-control" name="matoa" placeholder="Matoa">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="petai" class="control-label">Petai</label>
                            <input type="number" class="form-control" name="petai" placeholder="Petai">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="rambutan" class="control-label">Rambutan</label>
                            <input type="number" class="form-control" name="rambutan" placeholder="Rambutan">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="sirsak" class="control-label">Sirsak</label>
                            <input type="number" class="form-control" name="sirsak" placeholder="Sirsak">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="angsana" class="control-label">Angsana</label>
                            <input type="number" class="form-control" name="angsana" placeholder="Angsana">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="kemiri" class="control-label">Kemiri</label>
                            <input type="number" class="form-control" name="kemiri" placeholder="Kemiri">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="mahoni" class="control-label">Mahoni</label>
                            <input type="number" class="form-control" name="mahoni" placeholder="Mahoni">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="ramania" class="control-label">Ramania</label>
                            <input type="number" class="form-control" name="ramania" placeholder="Ramania">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Ketapang" class="control-label">Ketapang kencana</label>
                            <input type="number" class="form-control" name="Ketapang" placeholder="Ketapang kencana">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="sengon" class="control-label">sengon</label>
                            <input type="number" class="form-control" name="sengon" placeholder="sengon">
                        </div>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                    <input type="reset" name="reset" class="btn btn-warning" value="Reset">

                </form>
            </div>
        </div>
    </div>
</div>