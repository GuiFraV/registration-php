<?php

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', 'root');


    if(isset($_POST['forminscrition'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mail = htmlspecialchars($_POST['mail']);
        $mail2 = htmlspecialchars($_POST['mail2']);
        $mdp = sha1($_POST['mdp']);
        $mdp2 = sha1($_POST['mdp2']);
        if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])){
            

            $pseudolength = strlen($pseudo);

            if($pseudolength <= 255){

                if($mail = $mail2){

                    if(filter_var($mail, FILTER_VALIDATE_EMAIL)){

                        if($mdp == $mdp2){
    
                        }else{
                            $erreur = 'Vos mot de passe ne correspondent pas';
                        }
                    }else{
                        $erreur = 'Votre adresse mail n\'est pas valide';
                    }

                }else{
                    $erreur = 'Vos adresses mails ne correspondent pas';
                }
            }else {
                $erreur = 'Votre pseudo ne doit pas dépasser 255 caractères';
            }
        }
        else{
            $erreur = 'Tous les champs doivent être complétés';
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div align='center'>
        <h2>Inscription</h2>
        <br><br><br>
        <form method='POST' action="">
                <table >
                    <tr>
                        <td align="right"> 
                            <label for='pseudo'>Pseudo:</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Pseudo" name="pseudo" id="pseudo" value=" <?php if(isset($pseudo)) { echo $pseudo;} ?>">
                            
                        </td>
                    </tr>
                    <tr>
                        <td align="right"> 
                            <label for='mail'>mail:</label>
                        </td>
                        <td>
                            <input type="text" placeholder="mail" name="mail" id="mail">
                            
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <label for='mail2'>Confirmation du mail:</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Confirmez votre mail" name="mail2" id="mail2">
                            
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <label for='mdp'>Mot de passe:</label>
                        </td>
                        <td>
                            <input type="password" placeholder="Mot de passe" name="mdp" id="mdp">
                            
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <label for='mdp2'>Confirmation du Mdp:</label>
                        </td>
                        <td>
                            <input type="password" placeholder="Confirmez votre Mot de passe" name="mdp2" id="mdp2">
                            
                        </td>
                    </tr>
                </table>
                <br>
                <input type="submit" name='forminscrition' value="Je m'inscris">
            </form>
            <?php if(isset($erreur)){
                echo $erreur;
            } ?>
    </div>
</body>
</html>