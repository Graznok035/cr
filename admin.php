<h1>admin</h1>

<table border="1">
    <tr>
        <td>Mark</td>
        <td>Model</td>
        <td>Engine</td>
        <td>Fuel</td>
        <td>Price</td>
        <td>Image</td>
        <td>Kustuta</td>
        <td>Muuda</td>
    </tr>


<<<<<<< HEAD

<?php

=======
<?php 
>>>>>>> 57befb2963cb260a7015e2f5090aa455a6223954
    include("config.php");

    $paring = "SELECT * FROM cars LIMIT 8";
    $valjund = mysqli_query($yhendus, $paring);

    while($rida = mysqli_fetch_assoc($valjund)){
<<<<<<< HEAD
        //var_dump($rida);
=======
        // var_dump($rida);
>>>>>>> 57befb2963cb260a7015e2f5090aa455a6223954
        echo "<tr>
            <td>".$rida['mark']."</td>
            <td>".$rida['model']."</td>
            <td>".$rida['engine']."</td>
            <td>".$rida['fuel']."</td>
            <td>".$rida['price']."</td>
            <td>".$rida['image']."</td>
            <td><a href='kustuta.php?id=".$rida['id']."'>Kustuta</a></td>
            <td><a href='muuda.php?id=".$rida['id']."'>Muuda</a></td>
        </tr>";
    }
?>

</table>