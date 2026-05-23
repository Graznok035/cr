<?php

$db_server = 'localhost';
$db_andmebaas = 'cr';
$db_kasutaja = 'martin';
$db_salasona = '123secret';

$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);

if (!$yhendus) {
    die('Ei saa ühendust andmebaasiga');
}

?>