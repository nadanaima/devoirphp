<?php
    try{
        $file=fopen("commandes.txt","r+");
    }catch(exception $e){
        die("Un Erreur ".$e);
    }
    $arr=[]; $i=0;
    while($tmp=fgets($file))
        $arr[$i++]=explode(" | ",$tmp);
    echo '<pre>';
    var_dump($arr);
    echo '</pre>';