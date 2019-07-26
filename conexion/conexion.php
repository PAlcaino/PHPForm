 <?php


//foreach ($_POST as $key => $value)
//echo $key.'='.$value.'<br />';


$servidor="mysql:dbname=pruebaeleam;host=127.0.0.1";
$usuario = "root";
$password = "";

try {	

	$pdo= new PDO($servidor,$usuario,$password);
	echo "Conectado...";
	
} catch (PDOException $e) {

	echo "Conexion Mala :c".$e->getMessage();
	
}







?> 