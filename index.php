<?php

$submit = filter_input (INPUT_POST, 'submit');

$model = filter_input (INPUT_POST,"model");


?>
<?php
if(isset($submit)) {
  echo "Formulář byl odeslán <br>";

} else  ?>
<form action= "index.php" method="post">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>volkswagen.cz</title>
</head>
<body>

<h1>Volkswagen</h1>

<label for="cars">Vyber model:</label>
<select name="cars" id="cars">
  <option value="felicie">Polo</option>
  <option value="octavia">Golf</option>
  <option value="fabie">Passat</option>
  <option value="kodiaq">Tiguan</option>
  <option value="superb">Touran</option>
  <option value="scala">up!;</option>
<br>  
<input type="radio" id="benzin" name="car" value="benzin">
<label for="benzin">Benzín </label>
<br>
<input type="radio" id="diesel" name="car" value="diesel">
<label for="diesel">Diesel</label>
<br>
<input type="radio" id="LPG" name="car" value="LPG">
<label for="LPG">LPG</label>
<br>
<input type="radio" id="elektro" name="car" value="elektro">
<label for="elektro">Elektro</label>
<br>
<input type="radio" id="hybrid" name="car" value="hybrid">
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
<select name="barvy" id="barvy">
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