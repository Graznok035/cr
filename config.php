<?php

$db_server = 'localhost';
<<<<<<< HEAD
$db_andmebaas = 'cr';
$db_kasutaja = 'martin';
$db_salasona = '123secret';
=======
$db_andmebaas = 'car';
$db_kasutaja = 'mario';
$db_salasona = 'mario';
>>>>>>> 57befb2963cb260a7015e2f5090aa455a6223954

$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);

if (!$yhendus) {
    die('Ei saa ühendust andmebaasiga');
}

?>