<!DOCTYPE html>
<html>
<body>

<form method="POST" action="">
    Masukkan nama: <input type="text" name="nama">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    echo "Halo, $nama!";
}
?>

</body>
</html>