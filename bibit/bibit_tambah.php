<?php

if (isset($_POST['submit'])) {
    $alpukat     = $_POST['Alpukat'];
    $cempedak   = $_POST['Cempedak'];
    $durian      = $_POST['Durian'];
    $jengkol    = $_POST['Jengkol'];
    $langsat  = $_POST['Langsat'];
    $matoa  = $_POST['Matoa'];
    $petai  = $_POST['Petai'];
    $rambutan  = $_POST['Rambutan'];
    $sirsak  = $_POST['Sirsak'];
    $angsana  = $_POST['Angsana'];
    $kemiri  = $_POST['Kemiri'];
    $mahoni  = $_POST['Mahoni'];
    $ramania  = $_POST['Ramania'];
    $ketapang  = $_POST['Ketapang'];
    $sengon  = $_POST['Sengon'];

    // $result = mysqli_query($con, "INSERT INTO permohonan(ssss,jjj) VALUES('$dddd','$gggg')") or die(mysqli_error($con));

    header("Location:?page=bibit-show");
}
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>PENAMBAHAN STOK BIBIT</strong>
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="Alpukat" class="control-label">Alpukat</label>
                    <input type="number" class="form-control" name="Alpukat" placeholder="Alpukat">
                </div>
                <div class="form-group col-md-2">
                    <label for="Cempedak" class="control-label">Cempedak/Nangka</label>
                    <input type="number" class="form-control" name="Cempedak" placeholder="Cempedak/Nangka">
                </div>
                <div class="form-group col-md-2">
                    <label for="Durian" class="control-label">Durian</label>
                    <input type="number" class="form-control" name="Durian" placeholder="Durian">
                </div>
                <div class="form-group col-md-2">
                    <label for="Jengkol" class="control-label">Jengkol</label>
                    <input type="number" class="form-control" name="Jengkol" placeholder="Jengkol">
                </div>
                <div class="form-group col-md-2">
                    <label for="Langsat" class="control-label">Langsat</label>
                    <input type="number" class="form-control" name="Langsat" placeholder="Langsat">
                </div>
                <div class="form-group col-md-2">
                    <label for="Matoa" class="control-label">Matoa</label>
                    <input type="number" class="form-control" name="Matoa" placeholder="Matoa">
                </div>
                <div class="form-group col-md-2">
                    <label for="Petai" class="control-label">Petai</label>
                    <input type="number" class="form-control" name="Petai" placeholder="Petai">
                </div>
                <div class="form-group col-md-2">
                    <label for="Rambutan" class="control-label">Rambutan</label>
                    <input type="number" class="form-control" name="Rambutan" placeholder="Rambutan">
                </div>
                <div class="form-group col-md-2">
                    <label for="Sirsak" class="control-label">Sirsak</label>
                    <input type="number" class="form-control" name="Sirsak" placeholder="Sirsak">
                </div>
                <div class="form-group col-md-2">
                    <label for="Angsana" class="control-label">Angsana</label>
                    <input type="number" class="form-control" name="Angsana" placeholder="Angsana">
                </div>
                <div class="form-group col-md-2">
                    <label for="Kemiri" class="control-label">Kemiri</label>
                    <input type="number" class="form-control" name="Kemiri" placeholder="Kemiri">
                </div>
                <div class="form-group col-md-2">
                    <label for="Mahoni" class="control-label">Mahoni</label>
                    <input type="number" class="form-control" name="Mahoni" placeholder="Mahoni">
                </div>
                <div class="form-group col-md-2">
                    <label for="Ramania" class="control-label">Ramania</label>
                    <input type="number" class="form-control" name="Ramania" placeholder="Ramania">
                </div>
                <div class="form-group col-md-2">
                    <label for="Ketapang" class="control-label">Ketapang Kencana</label>
                    <input type="number" class="form-control" name="Ketapang" placeholder="Ketapang Kencana">
                </div>
                <div class="form-group col-md-2">
                    <label for="sengon" class="control-label">Sengon</label>
                    <input type="number" class="form-control" name="sengon" placeholder="Sengon">
                </div>
            </div>

            <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            <input type="reset" name="reset" class="btn btn-warning" value="Reset">

            </form>
        </div>
    </div>
</div>
</div>