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
        <title>Kukra</title>
    </head>
    <body>

        <section id="accueil">
            <header id="barreNavigation">
                <h1>Kucra</h1>
                <nav>
                    <ul class="listeNavigation">
                        <li><a href="#accueil">HOME</a></li>
                        <li><a href="#features">FEATURES</a></li>
                        <li><a href="#">CLIENT</a></li>
                        <li><a href="#pricing">PRICING</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#blog">BLOG</a></li>
                        <li><a href="#liensReseau">CONTACT</a></li>
                    </ul>
                </nav>
                <nav>
                    <ul class="listeNavigation">
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </nav>
            </header>
            <article id="articleAccueil">
                <article id="articleAccueilGauche">
                    <h2>We are StartUp Creative Kucra Agency</h2>
                    <p>
                        Carefully crafted after analysing the needs of 
                        different industries and the design achieves a 
                        great balance between purpose & presentation
                    </p>
                    <form action="">
                        <input type="text" name="email" id="email" placeholder="Enter your email">
                        <input type="submit" value="SUBSCRIBE" id="subscribe">
                    </form>
                </article>
                <aside>
                    <figure>
                        <img src="img/illustration.svg" alt="Écran d'ordinateur illustratif avec le contenu de celui-ci en 3 dimensions et un chat par dessus" id="imageOrdinateur">
                    </figure>
                </aside>
            </article>
        </section>

        <section id="features">
            <header>
                <h1>Products Features</h1>
                <p>
                    It is a long established fact that a reader will be of a page when established fact looking at its layout
                </p>
            </header>
            <article id="cartes">
                <article class="carte">
                    <h2><i class="fa-solid fa-globe"></i></h2>
                    <h3>Digital Design</h3>
                    <p>
                        Some quick example text to build on the card title and make up the bulk of the card platform.
                    </p>
                </article>
                <article class="carte">
                    <h2><i class="fa-sharp fa-solid fa-brush"></i></h2>
                    <h3>Unlimited Colors</h3>
                    <p>
                        Credibly brand stanaads compliant user exteible services College Anibh ocean euismod tincidunt laoreet.
                    </p>
                </article>
                <article class="carte">
                    <h2><i class="fa-solid fa-chess"></i></h2>
                    <h3>Strategy Solutions</h3>
                    <p>
                        Separated they live in Bookmarks grove right at the coast of the Semantics, a large ocean regelialia.
                    </p>
                </article>
            </article>
        </section>

        <section id="team">
            <header>
                <h1>
                    We'r dynamic team of talented people of innovative & marketing expert
                </h1>
                <p>
                    To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages of the resulting language.
                </p>
            </header>
            <article id="personnes">
                <article class="personne">
                    <h2>1499+</h2>
                    <p>
                        Complete Projects
                    </p>
                    <div id="imageReseau">
                        <nav id="personneReseau">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                            </ul>
                        </nav>
                        <figure>
                            <img src="img/person1.png" alt="Personne 1" class="imagePersonne">
                        </figure>
                    </div>
                    <h3>Anna G. Wilhite</h3>
                    <p>
                        CEO/Founder
                    </p>
                </article>
                <article class="personne">
                    <h2>1080K</h2>
                    <p>
                        Satisfied Clients
                    </p>
                    <div id="imageReseau">
                        <nav id="personneReseau">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                            </ul>
                        </nav>
                        <figure>
                            <img src="img/person2.png" alt="Personne 2" class="imagePersonne">
                        </figure>
                    </div>
                    <h3>William S. Blay</h3>
                    <p>
                        CEO/Co-Founder
                    </p>
                </article>
                <article class="personne">
                    <h2>608</h2>
                    <p>
                        Team Members
                    </p>
                    <div id="imageReseau">
                        <nav id="personneReseau">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                            </ul>
                        </nav>
                        <figure>
                            <img src="img/person3.png" alt="Personne 3" class="imagePersonne">
                        </figure>
                    </div>
                    <h3>Maria B. Morales</h3>
                    <p>
                        Web Designer
                    </p>
                </article>
                <article class="personne">
                    <h2>252</h2>
                    <p>
                        Employee
                    </p>
                    <div id="imageReseau">
                        <nav id="personneReseau">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                            </ul>
                        </nav>
                        <figure>
                            <img src="img/person4.png" alt="Personne 4" class="imagePersonne">
                        </figure>
                    </div>
                    <h3>Luke L. Johnston</h3>
                    <p>
                        Web Developer
                    </p>
                </article>
            </article>
        </section>

        <section id="parallax">
            <div id="imageParallax"></div>
            <article>
                <h1>Let's get started with Kukra</h1>
                <p>
                    They are a good way to get you started if you want to build something similar or use from existing apps which will reduce the cost, efforts and time of the developers.
                </p>
                <a href="#">
                    <button>Get Started</button>
                </a>
            </article>
        </section>

        <section id="blog">
            <header>
                <h1>Our Blog</h1>
                <p>
                    It is a long established fact that a reader will be of a page when established fact looking at its layout.
                </p>
            </header>
            <article id="sujetsBlog">
                <article class="sujetBlog">
                    <figure>
                        <a href="#" class="imageBlog"><img src="img/blog3.png" alt="Image blog 3"></a>
                        <figcaption class="infoSujetImage">
                            <h3><i class="fa-regular fa-user"></i> Calvin Carlo</h3>
                            <p>
                                <i class="fa-regular fa-clock"></i> 20th March 2021
                            </p>
                        </figcaption>
                    </figure>
                    <h2>Doing a cross country road trip</h2>
                    <p>
                        We craft digital, graphic and dimensional thinking, to create category leading brand.
                    </p>
                    <a href="#">Read more</a>
                </article>
                <article class="sujetBlog">
                    <figure>
                        <a href="#" class="imageBlog"><img src="img/blog1.png" alt="Image blog 1"></a>
                        <figcaption class="infoSujetImage">
                            <h3><i class="fa-regular fa-user"></i> Ruben Reed</h3>
                            <p>
                                <i class="fa-regular fa-clock"></i> 01th July 2021
                            </p>
                        </figcaption>
                    </figure>
                    <h2>New exhibition at our Museum</h2>
                    <p>
                        Even the all-powerful Pointing has no control about the blind almost unorthographic.
                    </p>
                    <a href="#">Read more</a>
                </article>
                <article class="sujetBlog">
                    <figure>
                        <a href="#" class="imageBlog"><img src="img/blog2.png" alt="Image blog 2"></a>
                        <figcaption class="infoSujetImage">
                            <h3><i class="fa-regular fa-user"></i> Theresa Sinclair</h3>
                            <p>
                                <i class="fa-regular fa-clock"></i> 25th July 2021
                            </p>
                        </figcaption>
                    </figure>
                    <h2>Design your apps in your own way</h2>
                    <p>
                        Pityful a rethoric question ran over her cheek, then she continued her way.
                    </p>
                    <a href="#">Read more</a>
                </article>
            </article>
        </section>

        <section id="stats">
            <article>
                <h1>We are digital creative Landing Page</h1>
                <p>
                    The difference between a successful person and others is not a lack of strength, not a lack knowledge, but rather a lack of will. Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.
                </p>
                <div id="statistiques">
                    <div class="statistique">
                        <h2>4957</h2>
                        <p>
                            Happy User
                        </p>
                    </div>
                    <div class="statistique">
                        <h2>1599</h2>
                        <p>
                            Complete Project
                        </p>
                    </div>
                </div>
                <a href="#">
                    <button>Learn More</button>
                </a>
            </article>
            <aside>
                <figure>
                    <img src="img/creativity.png" alt="Image creativity">
                </figure>
            </aside>
        </section>

        <section id="pricing">
            <header>
                <h1>Our Pricing</h1>
                <p>
                    It is a long established fact that a reader will be of a page when established fact looking at its layout.
                </p>
            </header>
            <article id="offres">
                <article class="offre">
                    <h2><?php getNom(1) ?></h2>
                    <p>
                        <span class="dollar">$</span><span class="prix"><?php getPrix(1) ?></span><span class="parMois">/month</span>
                    </p>
                    <div class="fonctionnalite">
                        <ul class="fonctionnaliteGauche">
                            <li><i class="fa-regular fa-circle-check"></i> Bandwidth</li>
                            <li><i class="fa-regular fa-circle-check"></i> Onlinespace</li>
                            <li><i class="fa-regular fa-circle-xmark"></i> Support</li>
                            <li><i class="fa-regular fa-circle-check"></i> Domain</li>
                            <li><i class="fa-regular fa-circle-xmark"></i> Hidden Fees</li>
                        </ul>
                        <ul class="fonctionnaliteDroite">
                            <li><?php getBandwidth(1) ?>GB</li>
                            <li><?php getOnlinespace(1) ?>MB</li>
                            <li><?php getSupport(1) ?></li>
                            <li><?php getDomain(1) ?></li>
                            <li><?php getHiddenFees(1) ?></li>
                        </ul>
                    </div>
                    <a href="#">
                        <button>Join Now</button>
                    </a>
                </article>
                <article class="offre selectionne">
                    <p id="sale">
                        20% sale
                    </p>
                    <h2><?php getNom(2) ?></h2>
                    <p>
                        <span class="dollar">$</span><span class="prix"><?php getPrix(2) ?></span><span class="parMois">/month</span>
                    </p>
                    <div class="fonctionnalite">
                        <ul class="fonctionnaliteGauche">
                            <li><i class="fa-regular fa-circle-check"></i> Bandwidth</li>
                            <li><i class="fa-regular fa-circle-check"></i> Onlinespace</li>
                            <li><i class="fa-regular fa-circle-check"></i> Support</li>
                            <li><i class="fa-regular fa-circle-check"></i> Domain</li>
                            <li><i class="fa-regular fa-circle-check"></i> Hidden Fees</li>
                        </ul>
                        <ul class="fonctionnaliteDroite">
                            <li><?php getBandwidth(2) ?>GB</li>
                            <li><?php getOnlinespace(2) ?>GB</li>
                            <li><?php getSupport(2) ?></li>
                            <li><?php getDomain(2) ?></li>
                            <li><?php getHiddenFees(2) ?></li>
                        </ul>
                    </div>
                    <a href="#">
                        <button>Join Now</button>
                    </a>
                </article>
                <article class="offre">
                    <h2><?php getNom(3) ?></h2>
                    <p>
                        <span class="dollar">$</span><span class="prix"><?php getPrix(3) ?></span><span class="parMois">/month</span>
                    </p>
                    <div class="fonctionnalite">
                        <ul class="fonctionnaliteGauche">
                            <li><i class="fa-regular fa-circle-check"></i> Bandwidth</li>
                            <li><i class="fa-regular fa-circle-check"></i> Onlinespace</li>
                            <li><i class="fa-regular fa-circle-check"></i> Support</li>
                            <li><i class="fa-regular fa-circle-check"></i> Domain</li>
                            <li><i class="fa-regular fa-circle-check"></i> Hidden Fees</li>
                        </ul>
                        <ul class="fonctionnaliteDroite">
                            <li><?php getBandwidth(3) ?>GB</li>
                            <li><?php getOnlinespace(3) ?>GB</li>
                            <li><?php getSupport(3) ?></li>
                            <li><?php getDomain(3) ?></li>
                            <li><?php getHiddenFees(3) ?></li>
                        </ul>
                    </div>
                    <a href="#">
                        <button>Join Now</button>
                    </a>
                </article>
            </article>
        </section>

        <footer>
            <ul id="liensReseau">
                <li><a href="#"><button><i class="fa-brands fa-facebook-f"></i></button></a></li>
                <li><a href="#"><button><i class="fa-brands fa-twitter"></i></button></a></li>
                <li><a href="#"><button><i class="fa-brands fa-linkedin"></i></button></a></li>
                <li><a href="#"><button><i class="fa-brands fa-google-plus-g"></i></button></a></li>
            </ul>
            <p id="liens">
                <a href="#">Terms & Condition</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact Us</a>
            </p>
            <p id="bas">
                2022 &copy Kucra - Landing Page Template by Pichforest
            </p>
        </footer>
        <button id="revenirEnHaut"><i class="fa-solid fa-arrow-up"></i></button>
    <script src="script.js"></script>
    </body>
</html>