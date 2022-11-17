<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli('127.0.0.1', 'root', '', 'bituca');
$mysqli->set_charset('utf8mb4');

if(isset($_POST['puntos']) && !empty($_POST['puntos'])){

	$puntos=$_POST['puntos'];

	if ($_POST['categoria']==3 || $_POST['categoria']==4 ){
		if ($_POST['prueba']==2){
			$puntos=$puntos*0.35;
		} elseif ($_POST['prueba']==5){
			$puntos=$puntos*0.20;
		}elseif ($_POST['prueba']==6){
			$puntos=$puntos*0.35;
		}elseif ($_POST['prueba']==9){
			$puntos=$puntos*0.05;
		}elseif ($_POST['prueba']==10){
			$puntos=$puntos*0.05;
		}
	} elseif ($_POST['categoria']==5){
		if ($_POST['prueba']==11){
			$puntos=$puntos*0.20;
		} elseif ($_POST['prueba']==6){
			$puntos=$puntos*0.30;
		}elseif ($_POST['prueba']==9){
			$puntos=$puntos*0.25;
		}elseif ($_POST['prueba']==10){
			$puntos=$puntos*0.25;
		}
	}elseif ($_POST['categoria']==6){
		if ($_POST['prueba']==11){
			$puntos=$puntos*0.40;
		} elseif ($_POST['prueba']==12){
			$puntos=$puntos*0.60;
		}
	}

	$sql = 'INSERT INTO puntuaciones VALUES (null,'.$_POST['categoria'].','.$_POST['prueba'].',"'.$_POST['observaciones'].'",'.$_POST['centro'].','.$puntos.')';
	if ($mysqli->query($sql) === TRUE) {
  		header( "Location: index.php" );
	} else {
  		echo "Error: " . $sql . "<br>" . $mysqli->error;
	}
	$mysqli->close();
}

?>
