<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli('127.0.0.1', 'root', '', 'bituca');
$mysqli->set_charset('utf8mb4');

if(isset($_POST['categoria']) && !empty($_POST['categoria'])){

$query = $mysqli->query('SELECT pru,nombre FROM cat_pru,Pruebas p WHERE pru=p.id AND cat = '.$_POST['categoria']);

$rowCount = $query->num_rows;

if($rowCount > 0){

while($row = $query->fetch_assoc()){

echo '<option value="'.$row['pru'].'">'.$row['nombre'].'</option>';

}

}else{

echo '<option value="">Pruebas no disponibles</option>';

}

}
