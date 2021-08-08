<div class="card">
    <div class="card-header">
        <strong>Data Ketersediaan Stok Bibit</strong>
    </div>

    <div class="card-body">
        <form action="?page=bibit-show" method="POST">

        </form>
        <!-- <div class="col-md-12"> -->
        <a href="../bibit/bibit_print.php" target="_blank" class="btn btn-success mb-4">Cetak Data Stok Bibit</a>
        <div class="table-responsive">
            <table class="table table-sm table-bordered table-hover m-0">
                <?php
                $limit = 15;
                $page = isset($_GET["halaman"]) ? (int) $_GET["halaman"] : 1;
                $mulai = ($page > 1) ? ($page * $limit) - $limit : 0;
                $query = mysqli_query($con, "SELECT * FROM stok_bibit LIMIT $mulai, $limit") or die(mysqli_error($con));
                ?>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Jenis</th>
                        <th>Stok Awal</th>
                        <th>Penambahan</th>
                        <th>Pengurangan</th>
                        <th>Distribusi</th>
                        <th>Stok Tersedia</th>
                    </tr>
                </thead>

                <tbody>
                    <?php



                    $no = $mulai + 1;
                    while ($data = mysqli_fetch_array($query)) {

                    ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $data['Nama_Jenis']; ?></td>
                            <td><?php echo $data['Stok_Awal']; ?></td>
                            <td><?php echo $data['Penambahan']; ?></td>
                            <td><?php echo $data['Pengurangan']; ?></td>
                            <td><?php echo $data['Distribusi']; ?></td>
                            <td><?php echo $data['Stok_Tersedia']; ?></td>

                        </tr>
                    <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <?php
        $result = mysqli_query($con, "SELECT * FROM stok_bibit") or die(mysqli_error($con));
        $total_records = mysqli_num_rows($result);
        ?>
        <p>Jumlah Data : <?php echo $total_records; ?></p>
        <nav class="mb-5">
            <ul class="pagination justify-content-end">
                <?php
                $jumlah_page = ceil($total_records / $limit);
                $jumlah_number = 1; //jumlah halaman ke kanan dan kiri dari halaman yang aktif
                $start_number = ($page > $jumlah_number) ? $page - $jumlah_number : 1;
                $end_number = ($page < ($jumlah_page - $jumlah_number)) ? $page + $jumlah_number : $jumlah_page;


                ?>
            </ul>
        </nav>
    </div>
</div>