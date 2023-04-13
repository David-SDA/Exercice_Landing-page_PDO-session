<?php
    $db = new PDO(
        "mysql:host=localhost;dbname=landing_page;charset=utf8",
        "root",
        "",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );

    /*
    $sqlQuery ="SELECT * FROM pricing";
    $statement = $db->prepare($sqlQuery);
    $statement->execute();
    $formules = $statement->fetchAll();
    */
    
    /* Fonction pour obtenir le nom d'une formule grâce a sont id */
    function getNom(int $numeroFormule){
        global $db;
        $sqlQuery = "SELECT nom_formule FROM pricing WHERE id_formule = $numeroFormule";
        $s = $db->prepare($sqlQuery);
        $s->execute();
        $nom = $s->fetchAll();
        foreach($nom as $n){
            echo $n["nom_formule"];
        }
    }

    /* Fonction pour obtenir le nom d'une formule grâce a sont id */
    function getPrix(int $numeroFormule){
        global $db;
        $sqlQuery = "SELECT prix FROM pricing WHERE id_formule = $numeroFormule";
        $s = $db->prepare($sqlQuery);
        $s->execute();
        $prix = $s->fetchAll();
        foreach($prix as $p){
            echo $p["prix"];
        }
    }
?>