<?php
require_once 'dbconnection.php';

if (isset($_POST['submit'])) {
    if (isset($conn)) {
        $termek = $conn->real_escape_string($_POST['termek']);
        $ar = $_POST['ar'];
        $kategoria = $conn->real_escape_string($_POST['kategoria']);
        $kep = $conn->real_escape_string($_POST['kep']);

        $sql = "INSERT INTO products (title, price, category, image)
            VALUES ('$termek', '$ar','$kategoria', '$kep')";

        if ($conn->query($sql)) {
            echo "Az adatokat mentettük" . "<br>";
            echo "<a href='listazas.php'>Lista</a>";
            $conn->close();
        } else {
            die("Hiba: " . $conn->error);
        }

    }
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    Termék:<input type="Text" name="termek"><br>
    Ár:<input type="Text" name="ar"><br>
    Kategória:<input type="Text" name="kategoria"><br>
    Kép:<input type="Text" name="kep"><br>
    <input type="Submit" name="submit" value="Elkuld">
</form>
