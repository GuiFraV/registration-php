<?php 

    if(isset($_POST['envoi'])){
        if(!empty($_POST['pseudo'] AND !empty($_POST['mdp']))){

        }else{
            echo 'Veuillez remplir tous les champs !';
        }
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Membre !</title>
</head>
<body>

    <br/><br/>

    <form method='POST' action="" align='center'>

        <input type="text" name="pseudo" id="">

        <br/><br/>

        <input type="password" name="mdp" id="">

        <br/><br/>

        <input type="submit" name="envoi">

    </form>
   
</body>
</html>