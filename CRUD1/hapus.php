<?php
include 'fungsi1.php';
function hapus($data) {
    $query = "DELETE FROM keranjang WHERE id_buah = '$data'";
    mysqli_query(db(), $query);
}

hapus(cek_data("id_buah"));

?>
<script>
    alert("Data Telah Dihapus!");
    location.href="index1.php";
</script>
<?php

?>