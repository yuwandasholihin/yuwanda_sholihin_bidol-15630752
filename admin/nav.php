<ul class="list-group">
    <li class="list-group-item"><a href="?page=dashboard">Dashboard</a></li>
    <li class="list-group-item"><a href="?page=mahasiswa-show">Data Mahasiswa</a></li>
    <li class="list-group-item"><a href="?page=mahasiswa-add">Tambah Data Mahasiswa</a></li>
    <?php
    if ($_SESSION['level'] == 'admin') {
        echo '
        <li class="list-group-item"><a href="?page=user-show">Data User</a></li>
        <li class="list-group-item"><a href="?page=user-add">Tambah Data User</a></li>
        ';
    }
    ?>
    <li class="list-group-item"><a href="logout.php">Logout</a></li>
</ul>