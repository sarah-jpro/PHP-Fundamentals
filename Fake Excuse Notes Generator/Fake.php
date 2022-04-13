<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fake Excuse Notes Generator</title>
</head>
<body>
<form action="" method="get">
    <p>Nom de l'enfant : <input type="text" name="nom"/></p>
    <label for="gender">Boy or Girl ?  : </label>
    <input type="radio" name="gender" value="boy"> Boy
    <input type="radio" name="gender" value="girl"> Girl <br> 
    <p>Nom de l'enseignant : <input type="text" name="name"/></p> 
    <label for="gender"> Raison de l'absence: </label> <br>
    <input type="radio" name="raison" value="maladie"> Maladie <br>
    <input type="radio" name="raison" value="décès"> Décès d'un memebre de la famille <br> 
    <input type="radio" name="raison" value="activité"> Activité parascolaire importante <br> 
    <input type="radio" name="raison" value="autre"> Autre <br> 
    <p><input type="submit" value="Submit"></p>
</form>
</body>
</html>