<?php 

$conexion = mysqli_connect('localhost', 'root', '', 'alumnos');

if($conexion){
	$curp = $_POST['curp'];
	$consulta = "SELECT * FROM datos WHERE CURP = '$curp'";
	
	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		while($row = $resultado->fetch_array()){
			
			$nombre = $row['NOMBRE'];
			$escuela = $row['ESCUELA'];
			$lugar = $row['LUGAR'];
			$e = $row['E'];
		}
	}			
}

if($e==2){
	echo "<h2>Alumno en tramites de movilidad</h2>";
	
}else{
	if ($e==3) {
		echo "<h2>Alumno dado de baja</h2>";
		
		
	}else{
		header("location: credencial.php?c=$curp&id=$nombre&id2=$escuela&id3=$e&id4=$lugar");
	}
}

?>