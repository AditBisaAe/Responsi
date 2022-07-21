<!DOCTYPE HTML>
<html>
    <meta charset="UTF-8">
<head>
    <title>LAUNDRY</title>
    <link icon="image/png" href="laundry.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="Responsi.css">
</head>
<body>

    <div class="header">
        <ul>
            <li class="nav">
                <a href="laundry.html">LAUNDRY</a>
            </li>
        </ul>
    </div>

<div class="content">
    <form action="saves.php" name="val" method="post">
        <label>NAMA&nbsp;&nbsp;&nbsp;&nbsp;: </label>
            <input type="text" name="nama" id="nama" required>
        <br><br>
        <label>ALAMAT&nbsp;: </label>
            <input type="text" name="alamat" id="alamat" required>
        <br><br>
        <label>PAKET&nbsp;&nbsp;&nbsp;&nbsp;:</label>
            <select name="paket" id="paket" required>
                <option value="MURMER">MURMER (3 - 4 hari)</option>
                <option value="SICEPAT">SI CEPAT (1 - 2 hari)</option>
            </select>
        <br><br>
        <label>
            <input type="reset" name="reset" value="Reset">
            <input type="submit" value="Submit">
        </label>
    </form>
</div>
</body>
</html>