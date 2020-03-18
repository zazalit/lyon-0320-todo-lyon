<?php require '_header.php'; ?>
        
        <main>
            <section>

                <h1 class="title_slogan">Be wild, be Lyon</h2>
                <img id="slogan" src="https://i.imgur.com/tQ7Pepz.jpg" alt="image slogan">
            </section>

            <!--paragraphe d'introduction-->
            <section class="introduction">
                <p class="parIntro">Pour vous aider à organiser votre séjour à Lyon, nous vous proposons des idées d'événements incontournables:
                    <br>
                    capital gastronomique, centre culturel, événements internationaux, paysage entre mer et montagne..
                    vous apprécierez la qualité de vie, le dynamisme et le charme de la ville de Lyon.
                    <br>
                    Alors ? Partant pour une découverte ?
                </p>

            </section>
            
           <section id="Categories">
                <h1 class="titre-catégories">À Lyon je veux...</h2>
                <aside class="meteofrance">
                    <script charset='UTF-8' src='http://www.meteofrance.com/mf3-rpc-portlet/rest/vignettepartenaire/691230/type/VILLE_FRANCE/size/PAYSAGE_VIGNETTE' type='text/javascript'></script>
                </aside>

                <div class="articles">

                    <div class="link-container">
                        <picture>
                            <div class="img-container">
                                <a rel="pagecinema" href="cinema.php" class="activities-link">
                                <img src="https://imgur.com/y6b7BYL.jpg" alt="responsive images" class="imgactivities" />
                                <p class="textstyle">Aller au cinéma</p>
                                </a>
                            </div>
                        </picture>
                    </div>

                    <div class="link-container">
                        <picture>
                            <div class="img-container">
                                <a rel="pagefood" href="food.html" class="activities-link">
                                <img src="https://i.imgur.com/p4LrpFr.jpg" alt="responsive images" class="imgactivities"/>
                                <p class="textstyle">Déguster</p>
                                </a>
                            </div>
                        </picture>
                    </div>

                    <div class="link-container">
                        <picture>
                            <div class="img-container">
                                <a rel="pagesport" href="sport.php" class="activities-link">
                                <img src="https://i.imgur.com/DonIlY9.jpg" alt="responsive images" class="imgactivities"/>
                                <p class="textstyle">Me dépenser</p>
                                </a>
                            </div>
                        </picture>
                    </div>

                    <div class="link-container">
                        <picture>
                            <div class="img-container">
                                <a rel="pagemusique" href="musique.php" class="activities-link">
                                <img src="https://i.imgur.com/sGlzKPJ.jpg" alt="responsive images" class="imgactivities"/>
                                <p class="textstyle">Rêver</p>
                                </a>
                            </div>
                        </picture>
                    </div>

                    <div class="link-container">
                        <picture>
                            <div class="img-container">
                                <a rel="pageculture" href="culture.php" class="activities-link">
                                <img src="https://i.imgur.com/tVdEtKV.jpg" alt="responsive images" class="imgactivities"/>
                                <p class="textstyle">Apprendre</p>
                                </a>
                            </div>
                        </picture>
                    </div>

                    <div class="link-container">
                        <picture>
                            <div class="img-container">
                                <a rel="pagenature" href="nature.php" class="activities-link">
                                <img src="https://i.imgur.com/tv8pC5e.jpg" alt="responsive images" class="imgactivities"/>
                                <p class="textstyle">M'évader</p>
                                </a>
                            </div>
                        </picture>
                    </div>

                </div>
            </section>
            
            <section class="bubble">
                <div class="bubble-text">
                <p> Notre petit conseil : armez-vous de vos appareils photos et partagez votre expérience </p>
                </div>
            </section>


             <!--Formulaire de contact -->
            <section id="Contact">
                <h2 class="contact-h">Contactez-nous</h2>
                <form class="form-M">
                    <fieldset>
                        <legend>Vos coordonnées</legend>

                            <div>
                                <label class="Champ-O" for="email">*</label>
                                <input class="int" type="email" id="email" name="email" placeholder="Votre mail" required/>
                            </div>

                            <div>
                                <label class="Champ-O" for="nom">*</label>
                                <input class="int" type="text" id="nom" name="nom" placeholder="Votre nom" required/>
                            </div>
                    </fieldset>
    
                    <fieldset>
                        <legend>Des questions ?</legend>

                            <div>
                                <label for="objet"></label>
                                <select name="object" id="object">
                                    <option>j'ai besoin d'un renseignement</option>
                                    <option>Je rencontre unproblème</option>
                                    <option>Je souhaite proposer une activité</option>
                                    <option>others</option>
                                </select>
                            </div>

                            <div>
                                <label for="message"></label>
                                <textarea id="message" name="message" placeholder="Votre message" required></textarea>
                            </div>
                                
                            <div>
                                <label for="pub">Je souhaite recevoir la newsletters</label>
                                <input class="int" type="checkbox" id="pub" name="pub" checked/>
                            
                            </div>
    
                            <div>
                                <button id="button-M">Envoyer !</button>
                            </div>

                    </fieldset>
                        <h4>Les champs marqués par "*" sont obligatoires.</h4>
                </form>

            
            </section>
        
        </main>

        <?php require '_footer.php'; ?>



        
        
        <script src="projet.js"></script>
        
    </body>
    
</html>