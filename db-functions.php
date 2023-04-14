<?php
session_start();
    $db = new PDO(
        "mysql:host=localhost;dbname=landing_page;charset=utf8",
        "root",
        "",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );

    /* Fonction pour obtenir tout de la table pricing */
    function getAll(){
        global $db;
        $sqlQuery = "SELECT * FROM pricing LIMIT 3";
        $s = $db->prepare($sqlQuery);
        $s->execute();
        return $s->fetchAll();
    }

    /* Fonction pour obtenir le nom d'une formule grâce a son id */
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

    /* Fonction pour obtenir le prix d'une formule grâce a son id */
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

    /* Fonction pour obtenir la réduction d'une formule grâce a son id */
    function getSale(int $numeroFormule){
        global $db;
        $sqlQuery = "SELECT sale FROM pricing WHERE id_formule = $numeroFormule";
        $s = $db->prepare($sqlQuery);
        $s->execute();
        $sale = $s->fetchAll();
        foreach($sale as $sa){
            if($sa["sale"] != 0){
                echo "<p id='sale'>" . $sa["sale"] . "% sale</p>";
            }
        }
    }

    /* Fonction pour obtenir la bande passante d'une formule grâce a son id */
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

    /* Fonction pour obtenir l'espace en ligne d'une formule grâce a son id */
    function getOnlinespace(int $numeroFormule){
        global $db;
        $sqlQuery = "SELECT onlinespace FROM pricing WHERE id_formule = $numeroFormule";
        $s = $db->prepare($sqlQuery);
        $s->execute();
        $onlinespace = $s->fetch();
        return $onlinespace['onlinespace'];
    }

    /* Fonction pour obtenir l'affichage du logo check et cross du support d'une formule */
    function getSupportLogo(int $numeroFormule){
        global $db;
        $sqlQuery = "SELECT support FROM pricing WHERE id_formule = $numeroFormule";
        $s = $db->prepare($sqlQuery);
        $s->execute();
        $support = $s->fetchAll();
        foreach($support as $supp){
            if($supp["support"] == 0){
                echo "<i class='fa-regular fa-circle-xmark'></i> ";
            }
            else{
                echo "<i class='fa-regular fa-circle-check'></i> ";
            }
        }
    }

    /* Fonction pour savoir si le support est disponible dans une formule grâce a son id */
    function getSupport(int $numeroFormule){
        global $db;
        $sqlQuery = "SELECT support FROM pricing WHERE id_formule = $numeroFormule";
        $s = $db->prepare($sqlQuery);
        $s->execute();
        $support = $s->fetchAll();
        foreach($support as $supp){
            if($supp["support"] == 0){
                echo "No";
            }
            else{
                echo "Yes";
            }
        }
    }

    /* Fonction pour obtenir le nombre de domaine d'une formule grâce a son id */
    function getDomain(int $numeroFormule){
        global $db;
        $sqlQuery = "SELECT domain FROM pricing WHERE id_formule = $numeroFormule";
        $s = $db->prepare($sqlQuery);
        $s->execute();
        $domain = $s->fetchAll();
        foreach($domain as $d){
            echo $d["domain"];
        }
    }

    /* Fonction pour obtenir l'affichage du logo check et cross des frais cachée d'une formule */
    function getHiddenFeesLogo(int $numeroFormule){
        global $db;
        $sqlQuery = "SELECT hidden_fees FROM pricing WHERE id_formule = $numeroFormule";
        $s = $db->prepare($sqlQuery);
        $s->execute();
        $hiddenFees = $s->fetchAll();
        foreach($hiddenFees as $hf){
            if($hf["hidden_fees"] == 0){
                echo "<i class='fa-regular fa-circle-check'></i> ";
            }
            else{
                echo "<i class='fa-regular fa-circle-xmark'></i> ";
            }
        }
    }

    /* Fonction pour savoir si il y a des frais cachées dans une formule grâce a son id */
    function getHiddenFees(int $numeroFormule){
        global $db;
        $sqlQuery = "SELECT hidden_fees FROM pricing WHERE id_formule = $numeroFormule";
        $s = $db->prepare($sqlQuery);
        $s->execute();
        $hiddenFees = $s->fetchAll();
        foreach($hiddenFees as $hf){
            if($hf["hidden_fees"] == 0){
                echo "No";
            }
            else{
                echo "Yes";
            }
        }
    }

    /* Fonction pour obtenir l'affichage de la confirmation de l'action de rejoindre une formule */
    function getAffichageConfirmation(){
        $result = "";
        /* Si on a une variable de session pour le message de confirmation, ou bien si il n'est pas vide */
        if( isset($_SESSION['message']) || !empty($_SESSION['message']) ){
            $result .= $_SESSION['message']; // On le recupère pour le message
            unset($_SESSION['message']);
            return $result;
        }
        return false;
    }

    /* Switch sur les actions */
    if(isset($_GET["action"])){
        switch($_GET["action"]){
            /* action d'update de la bdd sur les offres */
            case "update" :
                global $db;
                $requete = "UPDATE pricing SET nom_formule = '" . $_POST["nom_formule"] . "', prix = " . $_POST["prix"] . ", sale = " . $_POST["sale"] . ", bandwidth = " . $_POST["bandwidth"] . ", onlinespace = " . $_POST["onlinespace"] . ", support = " . $_POST["support"] . ", domain = '" . $_POST["domain"] . "', hidden_fees = " . $_POST["hidden_fees"] ." WHERE id_formule = " . $_GET["index"];
                $statement = $db->prepare($requete);
                $statement->execute();
                header("Location:admin.php");
                break;

            case "join" :
                global $db;
                $requete = "UPDATE pricing SET quantite=quantite+1 WHERE id_formule = " . $_GET["index"] ;
                $statement = $db->prepare($requete);
                $statement->execute();
                $donnee = getAll();
                $_SESSION['message'] = "You have joined the ". $donnee[$_GET["index"]-1]["nom_formule"] . " formula !";
                header("Location:index.php#pricing");
                break;
            
            case "addEmail" :
                global $db;
                $requete = "INSERT INTO email (email) VALUES ('". $_POST["email"] ."')";
                $statement = $db->prepare($requete);
                $statement->execute();
                header("Location:index.php");
                break;
        }
    }
?>