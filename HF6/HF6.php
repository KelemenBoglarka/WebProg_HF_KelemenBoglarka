<?php
session_start();

if (isset($_POST['elkuldott'])) {
    if (isset($_SESSION['kiSzam'])) {
        jatek($_POST['talalgatas'], $_SESSION['kiSzam']);
    } else {
        $_SESSION['kiSzam'] = rand(1, 10);
        jatek($_POST['talalgatas'], $_SESSION['kiSzam']);
    }
}

function jatek($beSzam, $kiSzam)
{
    if ($_POST['talalgatas'] >= 1 && $_POST['talalgatas'] <= 10) {
        if ($beSzam > $kiSzam) {
            echo "Kissebb! ";
        } elseif ($beSzam < $kiSzam) {
            echo "Nagyobb!";
        } else {
            echo "Eltaláltad: ".$kiSzam;
            unset($_SESSION['kiSzam']);
        }
    } else {
        echo "A szám nem 1 és 10 között van";
    }
}

?>

<form method="post" action="">
    <input type="hidden" name="elkuldott" value="true">
    Melyik számra gondoltam 1 és 10 között?
    <label>
        <input name="talalgatas" type="text">
    </label>
    <br>
    <br>
    <input type="submit" value="Elküld">
</form>