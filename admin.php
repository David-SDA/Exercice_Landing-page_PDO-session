<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    for($i = 1; $i<4; $i++)
                    {
                ?>
                <article class="offreUpdate">
                    <div class="update">
                        <div class="updateGauche">
                            <div>
                                <h2>Name</h2>
                                <input type="text" name="name" id="name">
                            </div>
                            <div>
                                <h2>Sale</h2>
                                <input type="number" name="sale" id="saleinput">
                            </div>
                            <div>
                                <h2>OnlineSpace</h2>
                                <input type="number" name="onlinespace" id="onlinespace">
                            </div>
                            <div>
                                <h2>Domain</h2>
                                <input type="text" name="domain" id="domain">
                            </div>
                        </div>
                        <div class="updateDroite">
                            <div>
                                <h2>Price</h2>
                                <input type="number" name="price" id="price">
                            </div>
                            <div>
                                <h2>Bandwidth</h2>
                                <input type="number" name="bandwidth" id="bandwidth">
                            </div>
                            <div>
                                <h2>Support</h2>
                                <input type="text" name="support" id="support">
                            </div>
                            <div>
                                <h2>Hidden Fees</h2>
                                <input type="text" name="hiddenFees" id="hiddenFees">
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <button>Update</button>
                    </a>
                </article> 
                <?php
                    }
                ?>   
            </article>
        </section>
    </body>
</html>