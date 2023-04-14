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

    /* Fonction pour obtenir l'affichage de la confirmation de l'action de update d'une formule par l'admin */
    function getAffichageConfirmationAdmin(){
        $result = "";
        /* Si on a une variable de session pour le message de confirmation, ou bien si il n'est pas vide */
        if( isset($_SESSION['messageAdmin']) || !empty($_SESSION['messageAdmin']) ){
            $result .= $_SESSION['messageAdmin']; // On le recupère pour le message
            unset($_SESSION['messageAdmin']);
            return $result;
        }
        return false;
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

    /* Fonction pour obtenir l'affichage de la confirmation de l'action d'ajout d'email */
    function getAffichageConfirmationEmail(){
        $result = "";
        /* Si on a une variable de session pour le message de confirmation, ou bien si il n'est pas vide */
        if( isset($_SESSION['messageEmail']) || !empty($_SESSION['messageEmail']) ){
            $result .= $_SESSION['messageEmail']; // On le recupère pour le message
            unset($_SESSION['messageEmail']);
            return $result;
        }
        return false;
    }

    /* Switch sur les actions */
    if(isset($_GET["action"])){
        switch($_GET["action"]){
            /* Action d'update de la bdd sur les offres */
            case "update" :
                global $db;
                $requete = "UPDATE pricing SET nom_formule = '" . $_POST["nom_formule"] . "', prix = " . $_POST["prix"] . ", sale = " . $_POST["sale"] . ", bandwidth = " . $_POST["bandwidth"] . ", onlinespace = " . $_POST["onlinespace"] . ", support = " . $_POST["support"] . ", domain = '" . $_POST["domain"] . "', hidden_fees = " . $_POST["hidden_fees"] ." WHERE id_formule = " . $_GET["index"];
                $statement = $db->prepare($requete);
                $statement->execute();
                $_SESSION['messageAdmin'] = "Formula " . $_POST['nom_formule'] . " has been updated !";
                header("Location:admin.php");
                break;
            
            /* Action de prendre une formule */
            case "join" :
                global $db;
                $requete = "UPDATE pricing SET quantite=quantite+1 WHERE id_formule = " . $_GET["index"] ;
                $statement = $db->prepare($requete);
                $statement->execute();
                $donnee = getAll();
                $_SESSION['message'] = "You have joined the ". $donnee[$_GET["index"]-1]["nom_formule"] . " formula !";
                header("Location:index.php#pricing");
                break;
            
            /* Action de rajout d'un email */
            case "addEmail" :
                global $db;
                $requete = "INSERT INTO email (email) VALUES ('". $_POST["email"] ."')";
                $statement = $db->prepare($requete);
                $statement->execute();
                $_SESSION['messageEmail'] = "L'email " . $_POST["email"] . " a été ajouté !";
                header("Location:index.php");
                break;
        }
    }
?>