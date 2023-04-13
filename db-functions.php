<?php
    $db = new PDO(
        "mysql:host=localhost;dbname=landing_page;charset=utf8",
        "root",
        "",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );

    $sqlQuery ="SELECT * FROM pricing";
    $statement = $db->prepare($sqlQuery);
    $statement->execute();
    $formules = $statement->fetchAll();

?>