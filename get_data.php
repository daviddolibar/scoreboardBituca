<?php
try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=bituca','root','');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

$cat=$_POST['cate'];
$limitar="";
if ($cat !== "1" && $cat !== "2" ) {
	$limitar=" LIMIT 5";
}
$sql = "SELECT ced.nombre, SUM(puntuacion) as pfinal FROM puntuaciones pu ,Centroed ced WHERE ced.id=pu.centro AND categoria=".$cat." GROUP BY ced.id ORDER BY pfinal DESC".$limitar;
$st = $conn->query($sql);
if ($st) {
    $rs = $st->fetchAll(PDO::FETCH_FUNC, fn($centro, $pfinal) => [$centro, $pfinal] );
    echo json_encode([
        'data' => $rs,
    ]);
} else {
    var_dump($conn->errorInfo());
    die;
}
?>
