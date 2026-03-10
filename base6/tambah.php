<html>
    <head>
        <title>Tambah Guru</title>
    </head>
    <body>
        <form action="proses_tambah.php" method="GET">
            <table>
                <tr>
                    <td><label>No</label></td>
                    <td><input type="number" name="no"></td>
                </tr>
                <tr>
                    <td><label>Nama Guru</label></td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td><label>Mata Pelajaran</label></td>
                    <td><input type="text" name="matpel"></td>
                </tr>
                <tr>
                    <td><label>Hari</label></td>
                    <td><input type="text" name="hari"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Kirim"></td>
                </tr>
            </table>
        </form>
    </body>
</html>