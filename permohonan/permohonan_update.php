<?php

if (isset($_POST['update'])) {
    $id       = $_POST['id'];
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
    $ketapang  = $_POST['setapan'];
    $sengon  = $_POST['sengon'];

    $result = mysqli_query($con, "UPDATE data_distribusi SET tanggal='$tanggal',nama='$nama',alamat='$alamat'
                            ,kabupaten='$kabupaten',kecamatan='$kecamatan',kelurahan='$kelurahan'
                            ,telepon='$telepon',email='$email,alpukat='$alpukat,cempedak='$cempedak,durian='$durian
                            ,jengkol='$jengkol,langsat='$langsat,matoa='$matoa,petai='$petai,rambutan='$rambutan
                            ,sirsak='$sirsak,angsana='$angsana,kemiri='$kemiri,mahoni='$mahon,ramania='$ramania
                            ,ketapang='$ketapang,sengon='$sengon' WHERE id=$id")
        or
        die(mysqli_error($con));

    header("Location:?page=permohonan-show");
}
