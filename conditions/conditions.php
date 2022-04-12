<?php
/**
 * Series of exercises on PHP conditional structures.
*/  


// Create the array of possible states
//
$possible_states = [
    0 => "health hazard",
    1 => "filthy",
    2 => "dirty",
    3 => "clean",
    4 => "immaculate"

];

    
    
  // When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[4]; 


 if($room_filthiness === "health hazard") {
    echo "Room is digusting! Let's clean it up!"; 
} else if ($room_filthiness == "filthy") {
    echo "Room is filthy : let's clean it up!";
} else if ($room_filthiness == "dirty") {
    echo "Room is dirty : let's clean it up!";
} else if ($room_filthiness == "clean") {
    echo "Room is clean, well done!";
}  else {
    echo "Nothing to do, room is neat.";
}
?>
<p>2.Display a different greeting message depending on the time of the day.</p>

<?php
$now = date ("H:i"); 
//echo $now;

// Test the value of $now and display the right message according to the specifications.
if ($now  > "05:00" AND $now <= "09:00") {
    echo "Good Morning!";
} if ($now > "09:01" AND $now <= "12:00") {
    echo "Good day!";
} if ($now > "12:01" AND $now <= "16:00" ) {
    echo "Good afternoon !";
} if ($now > "16:01" AND $now <= "21:00") {
    echo "Good evening !";
} if ($now > "21:01" AND $now <= "04:59") {
    echo "Good night !";
}
?>
<p>3.Display a different greeting according to the user's age.</p>
<?php

    if (isset($_GET['age']) && ctype_digit($_GET['age'])) {
        $age = $_GET['age'];

        if($age > 0 && $age <= 12) {
            echo 'Hello kiddo!';
        } else if($age > 12 && $age < 18) {
            echo 'Hello Teenager !';
        } else if($age >= 18 && $age <= 115) {
            echo 'Hello Adult !';
        } else if($age > 115) {
            echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
        }
    }
?>

<form method="get" action="">
    <label for="age">Please type your age: </label>
    <input type="text" id="age" name="age" value="" /><br>
    <input type="radio" name="gender" value="Man">Man<br> 
    <input type="radio" name="gender" value="Woman">Woman<br>  
    <input type="submit" name="submit" value="Enter">
</form>

<p>4.Display a different greeting according to the user's age and gender.(A finir)</p>
<p>5. Display a different greeting according to the user's age, gender and mothertongue.(A faire)</p>
<P>6. L’équipe de soccer féminin</P>

<form action="action.php" method="post">
    <p>Votre nom : <input type="text" name="nom" /></p>
    <p>Votre âge : <input type="text" name="age" /></p>
    <input type="radio" name="gender" value="Man">Man<br> 
    <input type="radio" name="gender" value="Woman">Woman<br>  
    <p><input type="submit" value="Submit"></p>
 </form>
 <?php

    if (isset($_GET['age']) && ctype_digit($_GET['age'])) {
        $age = $_GET['age'];

        if($age >= 21 && $age <= 40) {
            echo "welcome to the team !";
        } else if($age >=41 && $age < 18) {
            echo 'Hello Teenager !';
        } 
    }
?>
