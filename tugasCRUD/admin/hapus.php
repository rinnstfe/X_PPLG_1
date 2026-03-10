<?php
include 'adminfunc.php';
function hapus($data) {
    $query = "DELETE FROM ticketing WHERE no_film = '$data'";
    mysqli_query(db(), $query);
}

hapus(cek_data("no_film"));

?>
<script>
    alert("Data Telah Dihapus!");
    location.href="admin.php";
</script>
<?php

?>