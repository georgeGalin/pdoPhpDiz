<?php

        $host = "localhost";
        $usuario = "root";
        $pass = "";
        $nomeDB = "test";

        $pdb ="parola";


        error_reporting(0);



    $connessione = new mysqli($host,$usuario,$pass,$nomeDB);
    if($connessione->connect_errno){
        echo "connection error";
        exit();

    }
    ?>