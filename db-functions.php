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

    /* Fonction pour obtenir le prix d'une formule grâce a sont id */
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

    /* Fonction pour obtenir la bande passante d'une formule grâce a sont id */
    function getBandwidth(int $numeroFormule){
        global $db;
        $sqlQuery = "SELECT bandwidth FROM pricing WHERE id_formule = $numeroFormule";
        $s = $db->prepare($sqlQuery);
        $s->execute();
        $bandwidth = $s->fetchAll();
        foreach($bandwidth as $b){
            echo $b["bandwidth"];
        }
    }

    /* Fonction pour obtenir l'espace en ligne d'une formule grâce a sont id */
    function getOnlinespace(int $numeroFormule){
        global $db;
        $sqlQuery = "SELECT onlinespace FROM pricing WHERE id_formule = $numeroFormule";
        $s = $db->prepare($sqlQuery);
        $s->execute();
        $onlinespace = $s->fetchAll();
        foreach($onlinespace as $o){
            echo $o["onlinespace"];
        }
    }
?>