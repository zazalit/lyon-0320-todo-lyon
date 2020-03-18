<?php require '_header.php'; ?>

        <main>
            <section>
                <h2 class="title_slogan">Be wild, be Lyon</h2>
                <img id="slogan" src="https://i.imgur.com/tQ7Pepz.jpg" alt="image slogan">
            </section>
            
            <!-- Dropdown -->
        <div class="dropdown">
          <button class="dropbtn">Escapades !</button>
          <div class="dropdown-content">
            <a href="#Escapades_a_pieds">À pieds !</a>
            <a href="#Escapades_a_velo">En vélo !</a>
          </div>
        </div>
            <section class="sectionnature">
                <article class="articlenature">
                    <h2 id="Escapades_a_pieds">Escapades à pieds :</h2>
                        <p class="descriptionnature">On vous propose de superbes randonnées où vous pourrez admirer quelques vestiges du passé glorieux de l'époque romaine. Ainsi que des paysages à couper le souffle à deux pas de Lyon.</p>

                    <!-- Carousel -->
                    <div class="slider">
                        <figure>
                          <img src="https://i.imgur.com/rT2dMH6.jpg" alt="Aqueduc entouré d'arbre">
                          <img src="https://i.imgur.com/wBgPF0z.jpg" alt="Aqueduc avec ciel bleu">
                          <img src="https://i.imgur.com/zO9C8Z7.jpg" alt="chemin dans les bois">
                          <img src="https://i.imgur.com/K1KmFLH.jpg" alt="maison dans une colline">
                    </div>

                    <h2 id="Escapades_a_velo">Escapades à Vélo :</h2>
                        <p class="descriptionnature">Si vous cherchez un peu plus d'adrénaline, on peut vous proposer des parcours de VTT testés et approuvés pour tous les niveaux !</p>

                    <!-- Carousel -->
                    <div class="slider">
                        <figure>
                          <img src="https://i.imgur.com/5OzLuOh.jpg" alt="VTT dans la forêt">
                          <img src="https://i.imgur.com/xdPHceg.jpg" alt="Vélo sur fonc crépuscule">
                          <img src="https://i.imgur.com/CPsjSPy.jpg" alt="Vélos enfants dans les bois">
                          <img src="https://i.imgur.com/ungiYkQ.jpg" alt="VTT forêt">
                    </div>
                </article>
            </section>

            <section>
                <article>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d44555.84671339967!2d4.686307312415469!3d45.736300351464756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1584086801875!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </article>
            </section>

        </main>

        <?php require '_footer.php'; ?>
        
        <script src="projet.js"></script>
    </body>
    
</html>