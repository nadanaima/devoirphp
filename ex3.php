<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Commandes</title>
</head>
<style>
th{
  background-color:pink;
    
}

</style>
<body>
    <h1>Central d'achats</h1>
    <h4>Commande clients</h4>
    <table border=1>
        <tr>
            <th>Numero de commande</th>
            <th>Numero Client</th>
            <th>Date de commande</th>
            <th>Designation article</th>
            <th>Quantites</th>
            <th>Prix(DH)</th>
            <th>Date de livraison</th>
            <th>Addresse  Client</th>
        </tr>
        <?php
            $file=fopen("commandes.txt","r+");
            while($tmp=fgets($file)){
                echo "<tr>";
                foreach(explode(" | ",$tmp) as $i)
                    echo "<td>$i</td>";
                echo "</tr>";
            } 
        ?>
    </table>
</body>
</html>