<!DOCTYPE HTML>
<html>
    <head>
            <title>
                Apotek - Sediaan
            </title>
    </head>
    <body>
        <h1>Data Sediaan</h1><hr/>
        <a href='index.php' style='text-decoration:none'>
        <img src='icon/back.ico' width='20' height='20' title='Back to Home' align='top'/>
        <font color='brown'>Back to Home</font></a>
        <br/><br/>

        <a href='insertGolongan.php' style='text-decoration:none'>
        <img src='icon/add.ico' width='20' height='20' title='Insert' align='top'/>
        <font color='brown'>Insert</font></a>
        <br/><br/>

        <table border="1">
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        <?php
            include 'connection.php';
            $sql = "SELECT * FROM sediaan"; // Mengganti "golongan" menjadi "sediaan"
            $result = mysqli_query($con, $sql) or die(mysqli_error($sql));
            if (mysqli_num_rows($result) > 0) {
                while ($data = mysqli_fetch_array($result)) {
        ?>
                <tr>
                    <td><?= $data['kode']; ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td align="center">
                        <?=
                            "<a href='updateSediaan.php?kd=" . $data['kode'] . "'> 
                            <img src='icon/edit.ico' width='20' height='20' title='edit'/></a>
                            <a href='deleteSediaan.php?kd=" . $data['kode'] . "'> 
                            <img src='icon/delete.ico' width='20' height='20' title='delete'/></a>";
                        ?>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </body>
</html>