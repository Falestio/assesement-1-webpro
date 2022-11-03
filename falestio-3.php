<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku yang dimaksud Ente</title>
</head>
<body>
<?php
    $daftarBuku = $_SESSION["daftarBuku"];
    foreach ($daftarBuku as $buku) {
        echo "<h1>" . $buku["judul"] . "</h1>";
        echo "<p>" . $buku["tahun"] . "</p>";
        echo "<p>" . $buku["pengarang"][0] . "</p>";
        echo "<hr>";
    }
?>
</body>
</html>