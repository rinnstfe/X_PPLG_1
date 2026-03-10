<?php include 'db.php' ?>
<html>
    <head>
        <title>Ambil data dari db</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Daftar Guru Kesayangan</h1>
        <a href="tambah.php">Tambah Guru</a>
        <table border=1>
            <tr>
                <th>No</th>
                <th>Nama Guru</th>
                <th>Mata Pelajaran</th>
                <th>Hari</th>
            </tr>
        <?php
        // query = permintaan, kita minta data ke db
        $data = mysqli_query(
        $db,
        "SELECT * FROM jadwal"
        );  

        // cara mengambil data sesuai kolom
        foreach ($data as $item){
            ?>
        <tr>
            <td class="no"><?= $item['no']?></td>
            <td class="nama"><?= $item['nama_guru']?></td>
            <td class="matpel"><?= $item['mata_pelajaran']?></td>
            <td class="hari"><?= $item['hari']?></td>
        </tr>
        <?php
        }
        ?>
        </table>

        <hr>
        <h1>Daftar Teman Kesayangan</h1>
        <a href="tambah_temen.php">Tambah Teman</a>
        <!-- buat sama dgn yg diatas tapi yg diambil cuma nama -->
        <table>
            <tr>
                <th>Nama Teman</th>
            </tr>
        </table>
    </body>
</html>