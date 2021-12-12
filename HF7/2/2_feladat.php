<?php


$ch = curl_init('https://fakestoreapi.com/carts/user/');
curl_setopt($ch,CURLOPT_HTTPGET,true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_response = curl_exec($ch);

curl_close($ch);

$server_response = json_decode($server_response, true);

echo  $_GET['id'] . ". user: " . count($server_response) . " db kosár.<br><br>";

?>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    ID: <input type="number" name="id">
    <input type="submit" name="submit" value="submit">
</form>
