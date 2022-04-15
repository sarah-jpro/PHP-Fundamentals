<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="php.jpg">
    <title>Fake Excuse Notes Generator</title>
</head>
<body>
<form action="" method="get">
    <label for="name">Nom de l'enfant :</label>
    <input type="text" name="name"><br>
    <label for="gender">Boy or Girl ?  : </label>
    <input type="radio" name="gender" value="boy"> Boy
    <input type="radio" name="gender" value="girl"> Girl <br> 
    <label for="professeur">Teacher's name: </label>
    <input type="" name="professeur"><br>
    <label for="raison"> Raison de l'absence: </label> <br>
    <input type="radio" name="raison" value="maladie"> Maladie <br>
    <input type="radio" name="raison" value="décès"> Décès d'un membre de la famille <br> 
    <input type="radio" name="raison" value="activité"> Activité parascolaire importante <br> 
    <input type="radio" name="raison" value="autre"> Autre <br> 
    <p><input type="submit" value="Submit"></p>
       
</form>
<?php 
    $nom = isset($_GET['name']);
    $gender = isset($_GET['gender']);
    $professeur = isset($_GET['professeur']);
    $raison = isset($_GET['raison']);
?>

    <h1>Note Generator</h1>

    <p class="date">Le 
        <?php
            $date = date("l\, d-m-Y");
            setlocale(LC_TIME, "fr-FR");
            echo strftime("%A %d %B %G", strtotime($date));
        ?>,
    </p>

    <p class="paragraphe">Madame, Monsieur,</p>

    <p class="paragraphe">Veuillez excuser l'absence de 
        <?php
            $genre = $gender == "boy" ?  "mon fils, " : "ma fille, ";

            echo $genre . " " . $nom . ", pour cette journée.";
        ?>
    </p>

    <p class="paragraphe">En effet, 
        <?php
            echo($gender == "boy" ?  "il " : "elle ");
        ?>

        ne pourra pas suivre le cours du professeur

        <?php
            echo $professeur;
        ?>

        pour la raison suivante : 
    </p>

    <ul>
        <li> - <?php 
        echo $raison . " ";
        switch ($raison) {
            case 'maladie':
                echo " : Surditée passagère ";
                break;

            case 'décès':
                echo " : Iris notre chauve-souris adorée est malheureusement partie rejoindre le paradis de Batman .";
                break;

            case 'activité':
                echo " : Une compétition d'aqua Poney est prévue";
                break;
            
            default:
            echo " : école buissonnière!";
                break;
        }
        ?>
        </li>
    </ul>
    
    <p class="paragraphe">Veuillez accepter mes salutations distinguées</p>

    <img src="ecole1.jpeg" alt="Logo de l'école" heigh=70 width=70>
</body>
</html>