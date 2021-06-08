

<?php

$submit = filter_input (INPUT_POST, 'submit');

$model = filter_input (INPUT_POST,"model");
$cars = $_POST['cars'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volkswagen.cz </title>
</head>
<body>
<?php
if(isset($submit)) {
  echo "Formulář byl odeslán <br>";
  foreach ($cars as $car) {
    echo $car. "<br>";
  }
  } else  ?>
<form action= "index.php" method="post">
<h1>Volkswagen</h1>


<label for="cars">Vyber model:</label>
<select name="cars" id="cars">
  <option value="Polo">Polo</option>
  <option value="Golf">Golf</option>
  <option value="Passat">Passat</option>
  <option value="Tiguan">Tiguan</option>
  <option value="Touran">Touran</option>
  <option value="up">up!</option>

<br>  
<input type="radio" id="benzin" name="cars[]" value="benzin">
<label for="benzin">Benzín </label>
<br>
<input type="radio" id="diesel" name="cars[]" value="diesel">
<label for="diesel">Diesel</label>
<br>
<input type="radio" id="LPG" name="cars[]" value="LPG">
<label for="LPG">LPG</label>
<br>
<input type="radio" id="elektro" name="cars[]" value="elektro">
<label for="elektro">Elektro</label>
<br>
<input type="radio" id="hybrid" name="cars[]" value="hybrid">
<label for="hybrid">Hybrid</label>
<br>
<input type="checkbox" id="car1" name="cars[]" value="sedacky">
<label for="sedacky"> Vyhřívané sedačky</label>
<br>
<input type="checkbox" id="car2" name="cars[]" value="radio">
<label for="radio"> Radio</label>
<br>
<input type="checkbox" id="car3" name="cars[]" value="kridlo">
<label for="kridlo"> Křídlo</label>
<br>
<input type="checkbox" id="car4" name="cars[]" value="klimatizace">
<label for="klimatizace"> Klimatizace</label>
<br>
<input type="checkbox" id="car5" name="cars[]" value="vyfuk">
<label for="vyfuk"> Výfuk</label>
 <br>
<input type="checkbox" id="car6" name="cars[]" value="naradi">
<label for="naradi"> nářadí</label>
<br>
<input type="checkbox" id="car7" name="cars[]" value="motor">
<label for="motor"> Motor</label>
<br>
<label for="barvy">Barva:</label>
<select name="cars[]" id="barvy">
  <option value="fialova">Fialová</option>
  <option value="zelena">Zelená</option>
  <option value="cervena">Červená</option>
  <option value="cerna">Černá</option>
  <option value="bila">Bílá</option>
  <option value="hneda">Hnědá</option>
  <br>
</select>
<br>
<input type= "submit" value="Odeslat" name="submit">

</form>

</body>
</html>  