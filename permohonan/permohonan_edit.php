<?php

$id = $_GET['id'];

$result = mysqli_query($con, "SELECT * FROM data_distribusi WHERE id=$id") or die(mysqli_error($con));

while ($data = mysqli_fetch_array($result)) {
    $tanggal    = $data['tanggal'];
    $instansi   = $data['instansi'];
    $nama       = $data['nama'];
    $alamat     = $data['alamat'];
    $kabupaten  = $data['kabupaten'];
    $kecamatan  = $data['kecamatan'];
    $kelurahan  = $data['kelurahan'];
    $telepon    = $data['telepon'];
    $email      = $data['email'];
    $alpukat    = $data['alpukat'];
    $cempedak   = $data['cempedak'];
    $durian     = $data['durian'];
    $jengkol    = $data['jengkol'];
    $langsat    = $data['langsat'];
    $matoa      = $data['matoa'];
    $petai      = $data['petai'];
    $rambutan   = $data['rambutan'];
    $sirsak     = $data['sirsak'];
    $angsana    = $data['angsana'];
    $kemiri     = $data['kemiri'];
    $mahoni     = $data['mahoni'];
    $ramania    = $data['ramania'];
    $ketapang   = $data['ketapan'];
    $sengon     = $data['sengon'];
}
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="panel-title">Ubah Data permohonan</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="?page=permohonan-update" class="form-horizontal">

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="tanggal" class="control-label">Tanggal</label>
                            <input type="Date" class="form-control" name="tanggal" value="<?php echo $tanggal; ?>" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="instansi" class="control-label">Instansi</label>
                            <input type="text" class="form-control" name="instansi" placeholder="Nama Instansi / Perseorangan..." value="<?php echo $instansi; ?>" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="nama" class="ontrol-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Pemohon..." value="<?php echo $nama; ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat" class="control-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat / Lokasi Tanam..." value="<?php echo $alamat; ?>" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="Kabupaten" class="control-label">Kabupaten</label>
                            <input type="text" class="form-control" name="kabupaten" placeholder="Kabupaten" value="<?php echo $kabupaten; ?>" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="kecamatan" class="control-label">Kecamatan</label>
                            <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan; ?>" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="kelurahan" class="control-label">Kelurahan/Desa</label>
                            <input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan/Desa" value="<?php echo $kelurahan; ?>" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Masukan email..." value="<?php echo $email; ?>" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="telepon" class="control-label">Telepon</label>
                            <input type="number" class="form-control" name="telepon" placeholder="Masukan telepon..." value="<?php echo $telepon; ?>" required>
                        </div>
                    </div>

                    <div class="card-header">
                        <strong>Jenis Bibit</strong>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="alpukat" class="control-label">Alpukat</label>
                            <input type="number" class="form-control" name="alpukat" placeholder="Alpukat" value="<?php echo $alpukat; ?>" data>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="cempedak" class="control-label">Cempedak/Nangka</label>
                            <input type="number" class="form-control" name="cempedak" placeholder="Cempedak/nangka" value="<?php echo $cempedak; ?>" data>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="durian" class="control-label">Durian</label>
                            <input type="number" class="form-control" name="durian" placeholder="Durian" value="<?php echo $durian; ?>" data>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="jengkol" class="control-label">Jengkol</label>
                            <input type="number" class="form-control" name="jengkol" placeholder="Jengkol" value="<?php echo $jengkol; ?>" data>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="langsat" class="control-label">Langsat</label>
                            <input type="number" class="form-control" name="langsat" placeholder="Langsat" value="<?php echo $langsat; ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="matoa" class="control-label">Matoa</label>
                            <input type="number" class="form-control" name="matoa" placeholder="Matoa" value="<?php echo $matoa; ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="petai" class="control-label">Petai</label>
                            <input type="number" class="form-control" name="petai" placeholder="Petai" value="<?php echo $petai; ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="rambutan" class="control-label">Rambutan</label>
                            <input type="number" class="form-control" name="rambutan" placeholder="Rambutan" value="<?php echo $rambutan; ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="sirsak" class="control-label">Sirsak</label>
                            <input type="number" class="form-control" name="sirsak" placeholder="Sirsak" value="<?php echo $sirsak; ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="angsana" class="control-label">Angsana</label>
                            <input type="number" class="form-control" name="angsana" placeholder="Angsana" value="<?php echo $angsana; ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="kemiri" class="control-label">Kemiri</label>
                            <input type="number" class="form-control" name="kemiri" placeholder="Kemiri" value="<?php echo $kemiri; ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="mahoni" class="control-label">Mahoni</label>
                            <input type="number" class="form-control" name="mahoni" placeholder="Mahoni" value="<?php echo $mahoni; ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="ramania" class="control-label">Ramania</label>
                            <input type="number" class="form-control" name="ramania" placeholder="Ramania" value="<?php echo $ramania; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Ketapang" class="control-label">Ketapang kencana</label>
                            <input type="number" class="form-control" name="Ketapang" placeholder="Ketapang kencana" value="<?php echo $nketapang; ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="sengon" class="control-label">sengon</label>
                            <input type="number" class="form-control" name="sengon" placeholder="sengon" value="<?php echo $sengon; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                            <input type="submit" name="update" class="btn btn-primary" value="Update">
                            <input type="reset" name="reset" class="btn btn-warning" value="Reset">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>