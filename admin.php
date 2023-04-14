<?php
    
    include_once("db-functions.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>Kukra | Admin</title>
    </head>
    <body>
        <section id="updates">
            <header>
                <h1>Update Pricing</h1>
            </header>
            <article id="boiteUpdate">
                <?php
                    $data = getAll();
                    for($i = 0; $i<3; $i++)
                    {
                ?>
                <form class="offresUpdate" action="db-functions.php?action=update&index=<?= $i+1 ?>" method="post">
                    <div class="update">
                        <div class="updateGauche">
                            <div>
                                <h2>Name</h2>
                                <input type="text" name="nom_formule" id="name" value=<?= $data[$i]["nom_formule"] ?>>
                            </div>
                            <div>
                                <h2>Sale</h2>
                                <input type="number" name="sale" id="saleinput" value=<?= $data[$i]["sale"] ?>>
                            </div>
                            <div>
                                <h2>OnlineSpace</h2>
                                <input type="number" name="onlinespace" id="onlinespace" value=<?= $data[$i]["onlinespace"] ?>>
                            </div>
                            <div>
                                <h2>Domain</h2>
                                <input type="text" name="domain" id="domain" value=<?= $data[$i]["domain"] ?>>
                            </div>
                        </div>
                        <div class="updateDroite">
                            <div>
                                <h2>Price</h2>
                                <input type="number" name="prix" id="price" value=<?= $data[$i]["prix"] ?>>
                            </div>
                            <div>
                                <h2>Bandwidth</h2>
                                <input type="number" name="bandwidth" id="bandwidth" value=<?= $data[$i]["bandwidth"] ?>>
                            </div>
                            <div>
                                <h2>Support</h2>
                                <input type="number" name="support" id="support" value=<?= $data[$i]["support"] ?>>
                            </div>
                            <div>
                                <h2>Hidden Fees</h2>
                                <input type="number" name="hidden_fees" id="hiddenFees" value=<?= $data[$i]["hidden_fees"] ?>>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Update">
                </form>
                <div class="messageConfirmation"><?= getAffichageConfirmationAdmin() ?></div>
                <?php
                    }
                ?>   
            </article>
        </section>
        <a href="index.php#pricing" id="versAdmin"><i class="fa-solid fa-gear"></i></a>
    <script src="script.js"></script>
    </body>
</html>