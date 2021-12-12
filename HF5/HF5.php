<?php
if (isset($_POST['submit'])) {
    $validate = array("application/pdf");
    $email=$_POST['email'];

    if ((isset($_POST['firstName']) && $_POST['firstName'] !== '') && (isset($_POST['lastName']) && $_POST['lastName'] !== '') && (isset($_POST['email']) && $_POST['email'] !== '' && filter_var($email, FILTER_VALIDATE_EMAIL))
        && isset($_POST['attend']) && $_FILES['abstract']['error'] == 0 && $_FILES['abstract']['size'] < 1024 * 1024 * 3 && in_array($_FILES['abstract']['type'], $validate)
        && isset($_POST['terms']) && isset($_FILES['abstract'])) {
        echo "Sikeres jelentkezés<br>";
        echo "Keresztnév: " . $_POST['firstName'] . "<br>";
        echo "Vezetéknév: " . $_POST['lastName'] . "<br>";
        echo "Email: " . $_POST['email'] . "<br>";
        echo "Attend: ";
        foreach ($_POST['attend'] as $attend) {
            echo $attend . " ";
        }
        echo "<br>";
        if (isset($_POST['tshirt'])) {
            if ($_POST['tshirt'] == "P")
                echo "Válassz méretet<br>";
            else
                echo "Méret: " . $_POST['tshirt'] . "<br>";
        }
        echo "Abstract: " . $_FILES['abstract']['name'] . "<br>";
    } else {
        echo "<br>";
        if (!(isset($_POST['firstName']) && $_POST['firstName'] !== '')) {
            echo "Nem adtál meg vezeték nevet<br>";
        }
        if (!(isset($_POST['lastName']) && $_POST['lastName'] !== '')) {
            echo "Add meg a keresztneved<br>";
        }
        if (!(isset($_POST['email']) && $_POST['email'] !== '')) {
            echo "Add meg az email címed<br>";
        }

        if(!(filter_var($email, FILTER_VALIDATE_EMAIL)) && isset($_POST['email']) && $_POST['email'] !== ''){
            echo "Helytelen email cím<br>";
        }
        if (!isset($_POST['attend'])) {
            echo "Válassz pontot (attend)<br>";
        }
        if(!(isset($_FILES['abstract']))){
            echo "Tölts fel egy fájlt<br>";
        }else {
                echo "Fájfeltöltési hiba<br>";
            }
            if ($_FILES['abstract']['size'] > 1024 * 1024 * 3) {
                $size = $_FILES['abstract']['size'];
                $tobb = 1024 * 1024 - $size;
                echo "A fájl mérete túl nagy" . $tobb . " byte-al" . "<br>";
            }
            if (!(in_array($_FILES['abstract']['type'], $validate))) {
                echo "a fájl nem pdf<br>";
            }
        }
        if (!(isset($_POST['terms']))) {
            echo "Fogaja el a terms & conditions-t<br>";
        }
    }
}
?>
<h3>Online conference registration</h3>

<form method="post" action="">
    <label for="fname"> First name:
        <input type="text" name="firstName">
    </label>
    <br><br>
    <label for="lname"> Last name:
        <input type="text" name="lastName">
    </label>
    <br><br>
    <label for="email"> E-mail:
        <input type="text" name="email">
    </label>
    <br><br>
    <label for="attend"> I will attend:<br>
        <input type="checkbox" name="attend[]" value="Event1">Event 1<br>
        <input type="checkbox" name="attend[]" value="Event2">Event2<br>
        <input type="checkbox" name="attend[]" value="Event3">Event2<br>
        <input type="checkbox" name="attend[]" value="Event4">Event3<br>
    </label>
    <br><br>
    <label for="tshirt"> What's your T-Shirt size?<br>
        <select name="tshirt">
            <option value="P">Please select</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select>
    </label>
    <br><br>
    <label for="abstract"> Upload your abstract<br>
        <input type="file" name="abstract"/>
    </label>
    <br><br>
    <label>
        <input type="checkbox" name="terms" value="">
    </label>I agree to terms & conditions.<br>
    <br><br>
    <input type="submit" name="submit" value="Send registration"/>
</form>