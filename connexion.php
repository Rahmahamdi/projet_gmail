
<?php
 //start session 
 session_start();
?>

<?php
        include_once "./src/header.inc.php";

?>
    <body>
        <header>
         <h1>
            Bienvenue dans votre espace  nuit 
         </h1>
        </header>
        
       
        <main>
<section>
            <div class="connexion ">
            
                <h2>Connectez vous a votre compte</h2>
            
                    <fieldset id="account">
                            <legend>Connexion</legend>
                               <form method="post">
                            
                                    <label for="email">Mail</label> <br>
                                    <input type="text" id="email" name="email" placeholder="Votre mail" aria-required="true"> <br>
                                    <label for="psw">Mot de passe</label> <br>
                                    <input type="password" id="password" name="psw" placeholder="Votre mot de passe" aria-required="true"> <br>
                            
                                <div class="bouton">
                                <input type="submit" id="submit" value="Valider votre compte" aria-label="Valider">
                                </div>
                            
                               </form>
                        </fieldset>
            </div>            
</section>
<?php
        include_once "./src/log.inc.php";
        ?> 
                </main>
            
                <footer>
            
                </footer>
            </body>
            </html>
