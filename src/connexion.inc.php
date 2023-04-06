<?php
            try{// On se connecte à MySQL
                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                $bdd = new PDO('mysql:host=localhost;dbname=connexion', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
                
                // On récupère tout le contenu de la table inscription
                $reponse = $bdd->query('SELECT login, password FROM  inscription limit 1');

                while($data = $reponse->fetch()){
                    $data['mail'];
                    $data['password'];
                    
                    if(isset($_POST['mail']) && isset($_POST['password'])){
                        $login = $_POST['mail'];
                        $mdp = $_POST['password'];

                        if(!$login || !$mdp){
                            echo "<p class=\"warning\">Vous avez oubliez votre mail ou password?</p>";
                        }
                        else if($login!=$data['mail'] && $mdp!=$data['password']){
                            echo "<p class=\"warning\">Erreur login ou mot de passe?</p>";
                        }
                        else{
                            //print "<a href=\"connection.php\">Go!!!</a>";
                            $_SESSION['nom'] = $login;
                            echo "<p class=\"success\">Votre login est ".$_SESSION['nom']."
                            votre mot de passe est  ".md5($mdp);
                            header("Location: connection.php");
                            exit;
                            
                        }

                        
                    }
                
                
                }
                $reponse->closeCursor();
            }
            catch(Exception $e){
                die("Erreur de connexion : ".$e->getMessage());
            }

        ?>