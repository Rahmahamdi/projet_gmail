
<?php
 //start session 
 session_start();
?>

<?php
        include_once "./src/header.inc.php";

?>
    <body>
        
        <header>
      
 

            <nav>
                <img src="./image/mail.png" alt="logo" class="log" loading="lazy">
                <h1 class="title">Gmail</h1>
                <div class="nav-but">
                    <a href="#">Pour les Pros</a>
                    <a href="#">Creer un compte</a>
                     <a href="./conexion.html">Connexion</a>
                </div>
            </nav>
        </header>

        <main>
           

            <section>
                <h2>
                    retrouvez la fluidité et la <br> simplicité de Gmail sur<br> tous vos appareil
                </h2>
          
               <a href="#iindex.html" class="button-compte">Creer un compte</a>
            </section>

               <button>
              
          <img src="./image/arrow.png" alt="arrow" href="./index.html" href=".index.html" loading="lazy">
          


        </button>
        <div class="form">

            <h3>Une boîte de réception<br> entièrement repensée</h3>

            <h4>Avec les nouveaux onglets personnalisables, repérez <br>immédiatement les nouveaux messages et choisissez<br>
    
                ceux que vous souhaitez lire en priorité.</h4>

            <fieldset id="connection">

                <legend>Créer un compte</legend>
                <form method="post">


                    <label for="nom">Nom*</label> <br>
                    <input type="text" id="nom" name="nom" placeholder="Votre nom" aria-required="true" autofocus> <br>

                    <label for="prenom">Prénom*</label> <br>
                    <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" aria-required="true"> <br>

                    <label for="email">Mail*</label> <br>
                    <input type="text" id="email" name="mail" placeholder="Votre mail" aria-required="true"> <br>

                    <label for="password">Choisir votre mot de passe*</label> <br>
                    <input type="password" id="password" name="password" placeholder="Votre mot de passe" aria-required="true"> <br>
                    
                    <input type="submit" id="submit" value="Valider votre compte" aria-label="Valider">

                </form>
            </fieldset>
          
                    
              
         <?php
        include_once "./src/inscription_user.inc.php";
        ?> 
   =

        </main>

        <footer>
        
            

         
        </footer>
    </body>
</html>



