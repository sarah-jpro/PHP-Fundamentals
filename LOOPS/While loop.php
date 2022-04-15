<h1>While loop</h1>

<h2>Exercice n°1: while</h2>
<?php 
$number = 1;
while($number <= 120) {
    echo $number ++ . " ";
}
?>

<h2>Exercice n°2 : for</h2>
<?php 
for ($numbers = 1; $numbers <= 120 ; $numbers ++) { 
    echo $numbers ++ . " ";
}
?>

<h2>Exercice n°3  </h2>
<?php 
$team = ['Elise', 'Axel', 'Anaïs', 'Elise', 'Sarah', 'Matthias', 'Pierre', 'Kevin', 'Amoryne', 'David', 'Pierre', 'Corentin', 'Phillipe','Julie','Chris'];
foreach ($team as $firstame) {
    echo $firstame . " - ";
}
?>

<h2>Exercice n°4 </h2>
<?php 
$countries = array('DE' => 'Allemagne', 'AT' => 'Autriche', 'BE' => 'Belgique', 'ES' => 'Espagne', 'EE' => 'Estonie' , 'FR' => 'France', 'IT' => 'Italie', 'PL' => 'Pologne', 'PT' =>'Portugal', 'CH' => 'Suisse');
?>
<label for="pays">Choisi un pays en Europe :</label>
<select name="" id="">
    <option value="">Choisis un pays de ton choix...</option>
    <?php
    foreach ($countries as $key => $value) {
        echo '<option value=\'' . $key . '\'>' . $value . '</option>';
    }
    ?>
</select>