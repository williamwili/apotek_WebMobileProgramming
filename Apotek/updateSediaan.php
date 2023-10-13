<html>
    <head>
        <title>
            Apotek - Sediaan
        </title>
    </head>
    <body>
        <h1>Update Sediaan</h1>
        <hr/><br/>
        <?php
        include('connection.php');
        $kd = $_GET['kd']; // Menggunakan kurung siku [] bukan tanda kurung ()
        $sql = "SELECT * FROM sediaan WHERE kode = '$kd'"; // Menggunakan "=" bukan "-"
        $result = mysqli_query($con, $sql);
        while ($data = mysqli_fetch_array($result)) {
        ?>
        <form action="updateSedAction.php" method="POST">
            <table border="0" cellspacing="5">
                <tr>
                    <td><input type="text" size="50" name="kode" placeholder="Kode" value="<?= $data['kode']; ?>" readonly required /></td>
                </tr>

                <tr>
                    <td><input type="text" size="50" name="nama" placeholder="Nama" value="<?= $data['nama']; ?>" required /></td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="update" value="Update"/>
                        <input type="reset" value="Clear"/>
                        <input type="button" value="Cancel" name="Cancel" onclick="window.location.href='selectSediaan.php'">
                    </td>
                </tr>
            </table>
        </form>
        <?php } ?>
    </body>
</html>