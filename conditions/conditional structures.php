<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 : Condition </title>
</head>
<body>

    <?php 
    $temperatures = 18;

    if($temperatures >= 15) {
        $clothes = "T-Shirt";
        $should_i_wear_a_scarf = false;
        echo $clothes. " " .$should_i_wear_a_scarf;
    } else {
        $clothes = "Pull-over";
        $should_i_wear_a_scarf = true;
        echo $clothes. " " .$should_i_wear_a_scarf;
    }
    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 : Ajout de conditions</title>
</head>
<body>
    
    <?php
    $age = 18;
    $language = "Spanish";

    if($age <=12 AND $language == "English"){
        echo "Hello Kiddo!";
    } else {
        echo "Good day stranger!";
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 : Condition dans condition</title>
</head>
<body>
    <?php 
    $gender = "male";
    $age = 29;
    $language = "French";

    if($gender == "Female") {
        if($age <=12 AND $language == "English"){
            echo "Hello Kiddo!";
        } else {
            echo "Good day -not english- stranger!";
        }
    } else {
        if($age >=12 AND $language == "Chinese"){
            echo "Hello Kiddo!";
        } else {
            echo "Good day -not chinese- stranger!";
        }
    }
    ?>
</body>
</html>