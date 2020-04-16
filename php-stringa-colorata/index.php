<!--
Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”,
altrimenti stampare una stringa rossa.
-->
<?php

    $password = $_GET;
    echo '<pre>';
    var_dump($password);
    echo '</pre>';


    // con il ciclo mi ricavo il valore della chiave all'interno dell'array
    // che è la password che ho inserito
    foreach ($password as $key => $value) {
        echo $key .' ------> ' . $value . '<br>';
        if ($value === 'boolean') {
            echo '<h1 style="color: green"> la password è: '. $value .'</h1>';
        } else {
            echo '<p style="color: red">la password non è boolean, ma è: ' . $value . '</p>';
        }
    }

?>
