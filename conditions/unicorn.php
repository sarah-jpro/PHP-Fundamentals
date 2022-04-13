
<form action="" method="get">
    <label for="question"> Are you Human, Cat or Unicorn? </label><br>
    <input type="radio" name="question" value="human"> Human <br>
    <input type="radio" name="question" value="cat"> Cat <br>
    <input type="radio" name="question" value="unicorn"> Unicorn <br>
    <input type="submit" value="Submit">
</form>
<?php
$human= "<iframe src='https://giphy.com/media/4VEAg0IWR7gNa/giphy.gif'></iframe>";
$cat ="<iframe src='https://giphy.com/media/lJNoBCvQYp7nq/giphy.gif'></iframe>";
$unicorn ="<iframe src='https://giphy.com/media/nY6umzReX3q48/giphy.gif'></iframe>";

echo($_GET ['question'] ==='human'? $human : ($_GET['question'] ==='cat' ? $cat : $unicorn));
?>