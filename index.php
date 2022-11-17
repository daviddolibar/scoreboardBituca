<!DOCTYPE HTML>

<html style="text-align: center;">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title>Your Website</title>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<header>
<img src="header.png" alt="Nature" style="width:100%; height:95px;">
</header>
<section style="margin:10px;padding:10px">
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli('127.0.0.1', 'root', '', 'bituca');
$mysqli->set_charset('utf8mb4');

$query = $mysqli->query('SELECT * FROM Categorias');

$rowCount = $query->num_rows;

?>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script type="text/javascript">

$(document).ready(function(){

$('#categoria').on('change',function(){

var catID = $(this).val();

if(catID){

$.ajax({

type:'POST',

url:'ajaxData.php',

data:'categoria='+catID,

success:function(html){

$('#prueba').html(html);

}

});

}else{

$('#prueba').html('<option value="">Selecciona una categoría primero</option>');

}

});

});

</script>

</br></br>
<form action="meternotas.php" method="post">
<div class="row g-3">
  <div class="col">
<select class="form-select " name="categoria" id="categoria" required>

<option value="">Selecciona categoría de la prueba</option>

<?php

if($rowCount > 0){

while($row = $query->fetch_assoc()){

echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';

}

}else{

echo '<option value="">Categoría no disponible</option>';

}

?>

</select>
</div>
  <div class="col">
<select class="form-select " name="prueba" id="prueba" required>
</select>
</div>
</div>
<br><br>
<select class="form-select " name="centro" id="centro" required>

<option value="">Selecciona centro educativo</option>

<?php
$query2 = $mysqli->query('SELECT * FROM Centroed');

$rowCount2 = $query2->num_rows;
if($rowCount2 > 0){

while($row = $query2->fetch_assoc()){

echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';

}

}else{

echo '<option value="">Centro no disponible</option>';

}
?>
</select>
<br><br>

<div class="row mb-3">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Puntuación obtenida</label>
  <div class="col-sm-10">
    <input class="form-control" type="text" id="puntos" name="puntos" required size="3" placeholder="5,10,20....">
  </div>
</div>
<br><br>
<textarea name="observaciones" rows="7" cols="35" placeholder="Observaciones de la nota..."></textarea>
<br><br>
<button class="btn btn-primary" id="submitForm">Calificar</button>
<script>
   $("#submitForm").click(function() {
      alert("Gracias por tu calificación!");
   });
</script>
</form>
</section>
</br></br>
	<footer>
		<p>@Copyright 2023 By UTIC</p>
	</footer>

</body>

</html>
