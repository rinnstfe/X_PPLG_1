<html>
    <head>
        <title>
            User
        </title>
    </head>
    <body>
        <h1>Mau nonton apa?</h1>
    <table border="1">
        <tr>
            <th>Nama Film</th>
            <th>Jam tayang</th>
            <th colspan="2">Pesan tiket</th>
        </tr>
    </body>
    <?php
    function tampil(){
    $query = "SELECT * FROM ticketing";
    // koneksinya, perintahnya
    $data = mysqli_query(db(), $query);
    return $data;
}
?>
    <?php
    $data = tampil();
    $no = 1;
    while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $d['id']; ?>">Hapus</a></td>
        </tr>
        <?php
    }
    ?>
</html>