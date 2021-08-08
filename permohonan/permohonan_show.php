<div class="card">
    <div class="card-header">
        <strong>Data Distribusi</strong>
    </div>

    <div class="card-body">
        <form action="?page=permohonan-show" method="POST">

            <div class="form-row">
                <div class="form-group col-md-3"> <input type="date" class="form-control" name="keyword"> </div>
                <input button class="btn btn-primary" type="submit" value="Cari ! " id="button-search" name="search"></input>
                <a href="../permohonan/laporan_distribusi_bulanan.php" target="_blank" class="btn btn-success mb-4">Cetak Data Distribusi bulanan </a>
                <a href="../permohonan/laporan_distribusi_tahunan.php" target="_blank" class="btn btn-success mb-4">Cetak Data Distribusi Tahunan </a>
            </div>
    </div>

    </form>
    <div class="table-responsive">
        <table class="table table-sm table-bordered table-hover m-0">
            <?php
            $limit = 5;
            $page = isset($_GET["halaman"]) ? (int) $_GET["halaman"] : 1;
            $mulai = ($page > 1) ? ($page * $limit) - $limit : 0;
            $query = mysqli_query($con, "SELECT * FROM data_pemohon LIMIT $mulai, $limit") or die(mysqli_error($con));
            $query = mysqli_query($con, "SELECT * FROM data_bibit_pemohon LIMIT $mulai, $limit") or die(mysqli_error($con));
            ?>

            <thead>
                <tr>
                    <th>Aksi</th>
                    <th>no</th>
                    <th>Tanggal</th>
                    <th>Instansi</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kabupaten</th>
                    <th>Kecamatan</th>
                    <th>Kelurahan</th>
                    <th>telepon</th>
                    <th>email</th>
                    <th>Id_karyawan</th>
                    <th>Alpukat</th>
                    <th>Cempedak</th>
                    <th>Durian</th>
                    <th>Jengkol</th>
                    <th>Langsat</th>
                    <th>Matoa</th>
                    <th>Petai</th>
                    <th>Rambutan</th>
                    <th>Sirsak</th>
                    <th>Angsana</th>
                    <th>Kemiri</th>
                    <th>Mahoni</th>
                    <th>Ramania</th>
                    <th>Ketapang_kencana</th>
                    <th>Sengon</th>
                </tr>
            </thead>
            <tbody>
                <?php

                if (isset($_POST['search'])) {
                    $keyword = trim($_POST['keyword']);
                    if (!empty($keyword)) {
                        $query = mysqli_query($con, "SELECT * FROM data_pemohon WHERE tanggal LIKE '%" . $keyword . "%' OR nama LIKE '%" . $keyword . "%'");
                    }
                }

                $no = $mulai + 1;
                while ($data = mysqli_fetch_array($query)) {

                ?>
                    <tr>
                        <td> <a class="btn btn-sm btn-success" href="?page=permohonan-edit&id=<?php echo $data['id']; ?>">Edit</a>
                            <a class="btn btn-sm btn-danger" href="../permohonan/permohonan_hapus.php?id=<?php echo $data['id']; ?>" onclick="return 
                            confirm('Anda yakin mau menghapus item ini ?')">Hapus</a>
                        </td>
                        <td><?php echo $no ?></td>
                        <td><?php echo $data['tanggal']; ?></td>
                        <td><?php echo $data['instansi']; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['kabupaten']; ?></td>
                        <td><?php echo $data['kecamatan']; ?></td>
                        <td><?php echo $data['kelurahan']; ?></td>
                        <td><?php echo $data['telepon']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['Id_karyawan']; ?></td>
                        <td><?php echo $data['alpukat']; ?></td>
                        <td><?php echo $data['cempedak']; ?></td>
                        <td><?php echo $data['durian']; ?></td>
                        <td><?php echo $data['jengkol']; ?></td>
                        <td><?php echo $data['langsat']; ?></td>
                        <td><?php echo $data['matoa']; ?></td>
                        <td><?php echo $data['petai']; ?></td>
                        <td><?php echo $data['rambutan']; ?></td>
                        <td><?php echo $data['sirsak']; ?></td>
                        <td><?php echo $data['angsana']; ?></td>
                        <td><?php echo $data['kemiri']; ?></td>
                        <td><?php echo $data['mahoni']; ?></td>
                        <td><?php echo $data['ramania']; ?></td>
                        <td><?php echo $data['ketapang']; ?></td>
                        <td><?php echo $data['sengon']; ?></td>
                    </tr>
                <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php
    $result = mysqli_query($con, "SELECT * FROM data_pemohon");
    $total_records = mysqli_num_rows($result); ?> <p>Jumlah Data : <?php echo $total_records; ?></p>
    <nav class="mb-5">
        <ul class="pagination justify-content-end">
            <?php
            $jumlah_page = ceil($total_records / $limit);
            $jumlah_number = 4; //jumlah halaman ke kanan dan kiri dari halaman yang aktif 
            $start_number = ($page > $jumlah_number) ? $page - $jumlah_number : 1;
            $end_number = ($page < ($jumlah_page - $jumlah_number)) ? $page + $jumlah_number : $jumlah_page;

            if ($page == 1) {
                echo '<li class="page-item disabled"><a class="page-link" href="#">First</a></li>';
                echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
            } else {
                $link_prev = ($page > 1) ? $page - 1 : 1;
                echo '<li class="page-item"><a class="page-link" href="?page=permohonan-show&halaman=1">First</a></li>';
                echo '<li class="page-item"><a class="page-link" href="?page=permohonan-show&halaman=' . $link_prev . '" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
            }
            for ($i = $start_number; $i <= $end_number; $i++) {
                $link_active = ($page == $i) ? ' active' : '';
                echo '<li class="page-item ' . $link_active . '"><a class="page-link" href="?page=permohonan-show&halaman=' . $i . '">' . $i . '</a></li>';
            }
            if ($page == $jumlah_page) {
                echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
                echo '<li class="page-item disabled"><a class="page-link" href="#">Last</a></li>';
            } else {
                $link_next = ($page < $jumlah_page) ? $page + 1 : $jumlah_page;
                echo '<li class="page-item"><a class="page-link" href="?page=permohonan-show&halaman=' . $link_next . '" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
                echo '<li class="page-item"><a class="page-link" href="?page=permohonan-show&halaman=' . $jumlah_page . '">Last</a></li>';
            } ?> </ul>
    </nav>
</div>
</div>