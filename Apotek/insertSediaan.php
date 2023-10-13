<!DOCTYPE HTML>
<html>
    <head>
            <title>
                Apotek - Sediaan
            </title>
</head>
<body>
    <h1>Insert Sediaan</h1><hr/>
    <form action="insertSedAction.php" method="POST">
        <table border="0" cellspacing="5">
            <tr>
                <td><input type="text" size="50" name="kode" placeholder="Kode" required /></td>
            </tr>
            <tr>
                <td><input type="text" size="50" name="nama" placeholder="Nama" required /></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="insert" value="Insert" />
                    <input type="reset" value="Clear" />
                    <input type="button" value="Cancel" onclick="window.location.href='selectSediaan.php'" />
                </td>
            </tr>
</table>
</form>
</body>
</html>