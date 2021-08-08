<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
    <title>Pengajuan Permohonan</title>
</head>



<body>

    <?php

    include "header.php";

    include "connection.php";
    $con = "connection.php";

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


        $result = mysqli_query($con, "INSERT INTO data_pemohon
            (tanggal,instansi,nama,alamat,kabupaten,kecamatan,kelurahan,telepon,email) 
            VALUES('$tanggal','$instansi','$nama','$alamat','$kabupaten','$kecamatan',
            '$kelurahan','$telepon','$email')") or die(mysqli_error($con));

       
        $result = mysqli_query($con, "INSERT INTO data_bibit_pemohon
            (alpukat,cempedak,durian,jengkol,langsat,matoa,petai,rambutan,sirsak,angsana,kemiri,mahoni,ramania,
            ketapang,sengon) 
            VALUES('$alpukat','$cempedak','$durian','$jengkol','$langsat',
            '$matoa','$petai','$rambutan','$sirsak','$angsana','$kemiri','$mahoni','$ramania',
            '$ketapang','$sengon')") or die(mysqli_error($con));
    }
    ?>


    <div class="col-md-9 col-sm-12">

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
                                    <label for="Tanggal" class="control-label">Tanggal</label>
                                    <input type="text" class="form-control" name="tanggal" required="">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="Instansi" class="control-label">Instansi</label>
                                    <input type="text" class="form-control" name="Instansi" placeholder="Nama Instansi / Perseorangan..." required="">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="nama" class="ontrol-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Pemohon..." required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat" class="control-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat / Lokasi Tanam..." required="">
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="Kabupaten" class="control-label">Kabupaten</label>
                                    <input type="text" class="form-control" name="Kabupaten" placeholder="Kabupaten" required="">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="Kecamatan" class="control-label">Kecamatan</label>
                                    <input type="text" class="form-control" name="Kecamatan" placeholder="Kecamatan" required="">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="Kelurahan" class="control-label">Kelurahan/Desa</label>
                                    <input type="text" class="form-control" name="Kelurahan" placeholder="Kelurahan/Desa" required="">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email" class="control-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Masukan email...">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="telepon" class="control-label">Telepon</label>
                                    <input type="number" class="form-control" name="telepon" placeholder="Masukan telepon..." required="">
                                </div>
                            </div>

                            <div class="card-header">
                                <strong>Jenis Bibit</strong>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="Alpukat" class="control-label">Alpukat</label>
                                    <input type="number" class="form-control" name="Alpukat" placeholder="Alpukat">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="Cempedak" class="control-label">Cempedak/Nangka</label>
                                    <input type="text" class="form-control" name="Cempedak" placeholder="Cempedak/nangka">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="Durian" class="control-label">Durian</label>
                                    <input type="text" class="form-control" name="Durian" placeholder="Durian">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="Jengkol" class="control-label">Jengkol</label>
                                    <input type="text" class="form-control" name="Jengkol" placeholder="Jengkol">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="Langsat" class="control-label">Langsat</label>
                                    <input type="text" class="form-control" name="Langsat" placeholder="Langsat">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="Matoa" class="control-label">Matoa</label>
                                    <input type="text" class="form-control" name="Matoa" placeholder="Matoa">
                                </div>
                            </div>

                            <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                            <input type="reset" name="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>