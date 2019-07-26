<?php 

 $nombreResidente=(isset($_POST['nombreResidente']))?$_POST['nombreResidente']:"";
 $fechaDeNacimiento=(isset($_POST['fechaDeNacimiento']))?$_POST['fechaDeNacimiento']:"";
 $telefonoDeContacto=(isset($_POST['telefonoDeContacto']))?$_POST['telefonoDeContacto']:"";
 $foto=(isset($_POST['foto']))?$_POST['foto']:"";
 //datos personales
 $nombrePaciente=(isset($_POST['nombrePaciente']))?$_POST['nombrePaciente']:"";
 $rut=(isset($_POST['rut']))?$_POST['rut']:"";
 $edad=(isset($_POST['edad']))?$_POST['edad']:"";
 $fechaNacimiento=(isset($_POST['fechaNacimiento']))?$_POST['fechaNacimiento']:"";
 $prevision=(isset($_POST['prevision']))?$_POST['prevision']:"";
 $telefono=(isset($_POST['telefono']))?$_POST['telefono']:"";
 //antecedentes
 $medicos=(isset($_POST['medicos']))?$_POST['medicos']:"";
 $quirurgicos=(isset($_POST['quirurgicos']))?$_POST['quirurgicos']:"";
 $farmacos=(isset($_POST['farmacos']))?$_POST['farmacos']:"";
 $alergias=(isset($_POST['alergias']))?$_POST['alergias']:"";
 $tbq=(isset($_POST['tbq']))?$_POST['tbq']:"";
 $oh=(isset($_POST['oh']))?$_POST['oh']:"";
 $drogas=(isset($_POST['drogas']))?$_POST['drogas']:"";
 $sueno=(isset($_POST['sueno']))?$_POST['sueno']:"";
 $alimentacion=(isset($_POST['alimentacion']))?$_POST['alimentacion']:"";
 $deposicion=(isset($_POST['deposicion']))?$_POST['deposicion']:"";
 //social
 $escolaridad=(isset($_POST['escolaridad']))?$_POST['escolaridad']:"";
 $redApoyo=(isset($_POST['redApoyo']))?$_POST['redApoyo']:"";
 $gradoDependencia=(isset($_POST['gradoDependencia']))?$_POST['gradoDependencia']:"";
 //historia actual
 $motivoEstadia=(isset($_POST['motivoEstadia']))?$_POST['motivoEstadia']:"";
 $fechaEntrada=(isset($_POST['fechaEntrada']))?$_POST['fechaEntrada']:"";
 //signos vitales
 $frecuenciaCardiaca=(isset($_POST['frecuenciaCardiaca']))?$_POST['frecuenciaCardiaca']:"";
 $frecuenciaRespiratoria=(isset($_POST['frecuenciaRespiratoria']))?$_POST['frecuenciaRespiratoria']:"";
 $sato2=(isset($_POST['sato2']))?$_POST['sato2']:"";
 $presionArterial=(isset($_POST['presionArterial']))?$_POST['presionArterial']:"";
 $mmhgpam=(isset($_POST['mmhgpam']))?$_POST['mmhgpam']:"";
 $temperatura=(isset($_POST['temperatura']))?$_POST['temperatura']:"";
 //examen físico
 $estadoNutricional=(isset($_POST['estadoNutricional']))?$_POST['estadoNutricional']:"";
 $estadoDeConciencia=(isset($_POST['estadoDeConciencia']))?$_POST['estadoDeConciencia']:"";
 $cabezaCuello=(isset($_POST['cabezaCuello']))?$_POST['cabezaCuello']:"";
 $pulmonar=(isset($_POST['pulmonar']))?$_POST['pulmonar']:"";
 $cardiologico=(isset($_POST['cardiologico']))?$_POST['cardiologico']:"";
 $mamario=(isset($_POST['mamario']))?$_POST['mamario']:"";
 $abdominal=(isset($_POST['abdominal']))?$_POST['abdominal']:"";
 $extremidades=(isset($_POST['extremidades']))?$_POST['extremidades']:"";
 $upp=(isset($_POST['upp']))?$_POST['upp']:"";
 $otros=(isset($_POST['otros']))?$_POST['otros']:"";
 $examenesLaboratorio=(isset($_POST['examenesLaboratorio']))?$_POST['examenesLaboratorio']:"";
 $imagenes=(isset($_POST['imagenes']))?$_POST['imagenes']:"";
 $otrosExamenes=(isset($_POST['otrosExamenes']))?$_POST['otrosExamenes']:"";
 $diagnosticoYProblemas=(isset($_POST['diagnosticoYProblemas']))?$_POST['diagnosticoYProblemas']:"";
 //planes
 $derivaciones=(isset($_POST['derivaciones']))?$_POST['derivaciones']:"";
 $fechaProximoControl=(isset($_POST['fechaProximoControl']))?$_POST['fechaProximoControl']:"";
 //comentarios
 $comentarios=(isset($_POST['comentarios']))?$_POST['comentarios']:"";
 $accion=(isset($_POST['accion']))?$_POST['accion']:"";

include ("conexion/conexion.php");


switch ($accion) {
	case "btnAgregar":
			//Agregamos la Sentencia para insertar los Datos
			
				$sentencia=$pdo->prepare("INSERT INTO paciente(nombreResidente,fechaDeNacimiento,telefonoDeContacto,foto,nombrePaciente,rut,edad,fechaNacimiento,prevision,telefono,medicos,quirurgicos,farmacos,alergias,tbq,oh,drogas,sueno,alimentacion,deposicion,escolaridad,redApoyo,gradoDependencia,motivoEstadia,fechaEntrada,frecuenciaCardiaca,frecuenciaRespiratoria,sato2,presionArterial,mmhgpam,temperatura,estadoNutricional,estadoDeConciencia,cabezaCuello,pulmonar,cardiologico,mamario,abdominal,extremidades,upp,otros,examenesLaboratorio,imagenes,otrosExamenes,diagnosticoYProblemas,derivaciones,fechaProximoControl,comentarios) VALUES (:nombreResidente,:fechaDeNacimiento,:telefonoDeContacto,:foto,:nombrePaciente,:rut,:edad,:fechaNacimiento,:prevision,:telefono,:medicos,:quirurgicos,:farmacos,:alergias,:tbq,:oh,:drogas,:sueno,:alimentacion,:deposicion,:escolaridad,:redApoyo,:gradoDependencia,:motivoEstadia,:fechaEntrada,:frecuenciaCardiaca,:frecuenciaRespiratoria,:sato2,:presionArterial,:mmhgpam,:temperatura,:estadoNutricional,:estadoDeConciencia,:cabezaCuello,:pulmonar,:cardiologico,:mamario,:abdominal,:extremidades,:upp,:otros,:examenesLaboratorio,:imagenes,:otrosExamenes,:diagnosticoYProblemas,:derivaciones,:fechaProximoControl,:comentarios) ");

			//referencia a los valores VALUES utilizando bindParam
			
				$sentencia->bindParam(':nombreResidente', $nombreResidente);
				$sentencia->bindParam(':fechaDeNacimiento', $fechaDeNacimiento);
				$sentencia->bindParam(':telefonoDeContacto', $telefonoDeContacto);
				$sentencia->bindParam(':foto', $foto);
			//datos personales
				$sentencia->bindParam(':nombrePaciente', $nombrePaciente);
				$sentencia->bindParam(':rut', $rut);
				$sentencia->bindParam(':edad', $edad);
				$sentencia->bindParam(':fechaNacimiento', $fechaNacimiento);
				$sentencia->bindParam(':prevision', $prevision);
				$sentencia->bindParam(':telefono', $telefono);
			//antecedentes
				$sentencia->bindParam(':medicos', $medicos);
				$sentencia->bindParam(':quirurgicos', $quirurgicos);
				$sentencia->bindParam(':farmacos', $farmacos);
				$sentencia->bindParam(':alergias', $alergias);
				$sentencia->bindParam(':tbq', $tbq);
				$sentencia->bindParam(':oh', $oh);
				$sentencia->bindParam(':drogas', $drogas);
				$sentencia->bindParam(':sueno', $sueno);
				$sentencia->bindParam(':alimentacion', $alimentacion);
				$sentencia->bindParam(':deposicion', $deposicion);
			//social
				$sentencia->bindParam(':escolaridad', $escolaridad);
				$sentencia->bindParam(':redApoyo', $redApoyo);
				$sentencia->bindParam(':gradoDependencia', $gradoDependencia);
			//historia actual
				$sentencia->bindParam(':motivoEstadia', $motivoEstadia);
				$sentencia->bindParam(':fechaEntrada', $fechaEntrada);
			//Signos Vitales
				$sentencia->bindParam(':frecuenciaCardiaca', $frecuenciaCardiaca);
				$sentencia->bindParam(':frecuenciaRespiratoria', $frecuenciaRespiratoria);
				$sentencia->bindParam(':presionArterial', $presionArterial);
				$sentencia->bindParam(':sato2', $sato2);
				$sentencia->bindParam(':mmhgpam', $mmhgpam);
				$sentencia->bindParam(':temperatura', $temperatura);
			//examen físico
				$sentencia->bindParam(':estadoNutricional', $estadoNutricional);
				$sentencia->bindParam(':estadoDeConciencia', $estadoDeConciencia);
				$sentencia->bindParam(':cabezaCuello', $cabezaCuello);
				$sentencia->bindParam(':pulmonar', $pulmonar);
				$sentencia->bindParam(':cardiologico', $cardiologico);
				$sentencia->bindParam(':mamario', $mamario);
				$sentencia->bindParam(':abdominal', $abdominal);
				$sentencia->bindParam(':extremidades', $extremidades);
				$sentencia->bindParam(':upp', $upp);
				$sentencia->bindParam(':otros', $otros);
				$sentencia->bindParam(':examenesLaboratorio', $examenesLaboratorio);
				$sentencia->bindParam(':imagenes', $imagenes);
				$sentencia->bindParam(':otrosExamenes', $otrosExamenes);
				$sentencia->bindParam(':diagnosticoYProblemas', $diagnosticoYProblemas);
			//planes
				$sentencia->bindParam(':derivaciones', $derivaciones);
				$sentencia->bindParam(':fechaProximoControl', $fechaProximoControl);
			//comentarios
				$sentencia->bindParam(':comentarios', $comentarios);
				$sentencia->execute();
			
		echo "Presionaste btnAgregar";
	break;

	case "btnModificar":
		echo $nombreResidente;
		echo "Presionaste btnModificar";
	break;

	case "btnEliminar":
		echo $nombreResidente;
		echo "Presionaste btnEliminar";
	break;

	case "btnCancelar":
		echo $nombreResidente;
		echo "Presionaste btnCancelar";
	break;
	
}


?>

<!DOCTYPE html>
<html>
<head>

	<title>Proyecto ELEAM</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<style type="text/css">
			.borde{
				background-color: gray;
				height: 200px;
			}	
			.borde1{
				background-color: aquamarine;
				height: 50px;
			}
			.borde2{
				text-align: center;
				height: 50px;
				background-color: olivedrab;
				
			}
			.borde3{
				text-align: center;
				background-color: orangered;
				height: 50px;
			}
	</style>

</head>
<body>
<!--                     Empieza contenido                            -->
<div class="container">



	<div class="row">

		 <div class="col-6	col-sm-6   col-md-6   col-lg-6  col-xl-6"> <img src="img/imagen1.jpg" class="w-1"></div>			 
		 <div class="col-6  col-sm-6   col-md-6   col-lg-6  col-xl-6">  <img src="img/imagen2.jpg" class="w-1"></div>
		

		 
	</div>



<div class="container">



	<div class="row">

		 <div class="col-12	col-sm-12   col-md-12   col-lg-12  col-xl-12">  
		 	

		 			<!--                     Metodo Form                            -->
		 	<form action="" method="POST" enctype="multipart/form-control">

		 				<center> 
						<h3> FICHA CLÍNICA</h3><br>
						<h3> ELEAM PUENTE ALTO</h3><br> 	
			</center>
			<label for ="nombreResidente">Nombre de Residente: </label> 
			<input type="text" name="nombreResidente">
			<br>
			<label for ="fechaDeNacimiento">Fecha De Nacimiento: </label>
		    <input type="date" name="fechaDeNacimiento" id="fechaDeNacimiento">
		    <br>
			<label for ="telefonoDeContacto">Teléfono de Contacto: </label>
			<input type="numeric" name="telefonoDeContacto" id="telefonoDeContacto">
			<br>
			<label for ="foto">Foto: </label> 
			<input type="text" name="foto" id="foto">
			<br>

						<center>
		 				<h3>DATOS PERSONALES</h3>
		 				</center>


		 	<label for="nombrePaciente">Nombre: </label> 
		 	<input type="text" name="nombrePaciente" class="form-control" id="nombrePaciente">

		 	<label for="rut">Rut: </label>
		 	<input type="text" name="rut" class="form-control" id="rut">

		 	<label for="edad">Edad: </label> 
		 	<input type="numeric" name="edad" class="form-control" id="edad">

		 	<label for="fechaNacimiento">Fecha de nacimiento: </label>
		 	<input type="text" name="fechaNacimiento" class="form-control" id="fechaNacimiento">

		 	<label for="prevision">Previsión: </label> 
		 	<input type="text" name="prevision" class="form-control" id="prevision">

		 	<label for="telefono">Teléfono de contacto: </label> 
		    <input type="numeric" name="telefono" class="form-control" id="telefono">

		 				<center>
		 				<h3>ANTECEDENTES</h3>
		 				</center>

		 		<label for="medicos">Médicos: </label>
		 		<input type="text" name="medicos" class="form-control" id="medicos">

		 		<label for="quirurgicos">Quirúrgicos: </label>
		 		<input type="text" name="quirurgicos" class="form-control" id="quirurgicos">

		 		<label for="farmacos">Fármacos: </label>
		 		<input type="text" name="farmacos" class="form-control" id="farmacos">

		 		<label for="alergias">Alergias: </label> 
		 		<input type="text" name="alergias" class="form-control" id="alergias">
		 		<br>

		 		<label for="tbq">TBQ: </label>
		 		<input type="text" name="tbq" id="tbq">

		 		<label for="oh">OH: </label>  
		 		<input type="text" name="oh" id="oh">

		 		<label for="drogas">Drogas: </label> 
		 		<input type="text" name="drogas" id="drogas">
		 		<br>

		 		<label for="sueno">Sueño: </label>
		 		<input type="text" name="sueno" class="form-control" id="sueno">

		 		<label for="alimentacion">Alimentacion: </label>
		 		<input type="text" name="alimentacion" class="form-control" id="alimentacion">
		 		
		 		<label for="deposicion">Micción y Deposiciones: </label>
		 		<input type="text" name="deposicion" class="form-control" id="deposicion">

		 					<center>
		 					<h3>Social:</h3>
		 					</center>

		 		<label for="escolaridad">Escolaridad: </label>
		 		<input type="text" name="escolaridad" id="escolaridad">
		 		<br>
		 		<label for="redApoyo">Red de Apoyo: </label>
		 		<input type="text" name="redApoyo" id="redApoyo">
		 		<br>
		 		<label for="gradoDependencia">Grado Dependencia(BARTHEL): </label>
		 		<input type="text" name="gradoDependencia" id="gradoDependencia">
		 		<br>

		 				 	<center>
		 				 	<h3>HISTORIAL ACTUAL</h3>
		 				 	</center>

		 		<label for="motivoEstadia">Motivo de Estadía: </label>
		 		<input type="text" name="motivoEstadia" class="form-control" id="motivoEstadia">
		 		
		 		<label for="fechaEntrada">Fecha de Entrada: </label>
		 		<input type="text" name="fechaEntrada" class="form-control" id="fechaEntrada">

		 					<center>
		 					<h3>Signos Vitales: </h3>
		 					</center><br>

		 		<label for="frecuenciaCardiaca">Frecuencia Cardiaca: </label>
		 		<input type="text" name="frecuenciaCardiaca" id="frecuenciaCardiaca">

		 		<label for="frecuenciaRespiratoria">Frecuencia Respiratoria: </label>
		 		<input type="text" name="frecuenciaRespiratoria" id="frecuenciaRespiratoria">

		 		<label for="sato2">Sato2: </label>
		 		<input type="text" name="sato2" id="sato2">
		 		<br>

		 		<label for="presionArterial">Presión Arterial: </label>
		 		<input type="text" name="presionArterial" id="presionArterial">

		 		<label for="mmhgpam">mmHg PAM: </label>
		 		<input type="text" name="mmhgpam" id="mmhgpam">

		 		<label for="temperatura">Temperatura: </label>
		 		<input type="text" name="temperatura" id="temperatura">
		 		<br>
		 					
		 					<center>		 					
		 					<h3>Examen Físico</h3>
		 					</center><br>

		 		<label for="estadoNutricional">Estado Nutricional: </label>
		 		<input type="text" name="estadoNutricional" class="form-control" id="estadoNutricional">

		 		<label for="estadoDeConciencia">Estado de Concienca: </label>
		 		<input type="text" name="estadoDeConciencia" class="form-control" id="estadoDeConciencia">

		 		<label for="cabezaCuello">Cabeza y Cuello: </label>
		 		<input type="text" name="cabezaCuello" class="form-control" id="cabezaCuello">

		 		<label for="pulmonar">Pulmonar: </label>
		 		<input type="text" name="pulmonar" class="form-control" id="pulmonar">

		 		<label for="cardiologico">Cardiologico: </label>
		 		<input type="text" name="cardiologico" class="form-control" id="cardiologico">

		 		<label for="mamario">Mamario: </label>
		 		<input type="text" name="mamario" class="form-control" id="mamario">

		 		<label for="abdominal">Abdominal: </label>
		 		<input type="text" name="abdominal" class="form-control" id="abdominal">

		 		<label for="extremidades">Extremidades: </label>
		 		<input type="text" name="extremidades" class="form-control" id="extremidades">

		 		<label for="upp">UPP: </label>
		 		<input type="text" name="upp" class="form-control" id="upp">

		 		<label for="otros">Otros: </label>
		 		<input type="text" name="otros" class="form-control" id="otros">

		 		<label for="examenesLaboratorio">Exámenes de Laboratorio: </label>
		 		<input type="text" name="examenesLaboratorio" class="form-control" id="examenesLaboratorio">

		 		<label for="imagenes">Imágenes: </label>
		 		<input type="text" name="imagenes" class="form-control" id="imagenes">

		 		<label for="otrosExamenes">Otros Exámenes: </label>
		 		<input type="text" name="otrosExamenes" class="form-control" id="otrosExamenes">

		 		<label for="diagnosticoYProblemas">Diagnóstico y Problemas Actuales: </label>
		 		<input type="text" name="diagnosticoYProblemas" class="form-control" id="diagnosticoYProblemas">
		 					
		 					<center>
		 					<h3>PLANES</h3>
		 					</center><br>

		 		<label for="derivaciones">Derivaciones: </label>
		 		<input type="text" name="derivaciones" class="form-control" id="derivaciones">
		 		<br>

		 		<label for="fechaProximoControl">Fecha Próximo Control: </label>
		 		<input type="text" name="fechaProximoControl" id="fechaProximoControl">
		 		<br>
		 					
		 					<center>
		 					<p>Comentarios/Notas: </p>
		 					</center>
		 		
		 		<textarea  name="comentarios" id="comentarios" cols="100" rows="15"></textarea>
		 		<br>
		 		<button value="btnAgregar" type="submit" name="accion"> Agregar </button>
		 		<button value="btnModificar" type="submit" name="accion">Modificar</button>
		 		<button value="btnEliminar" type="submit" name="accion">Eliminar</button>
		 		<button value="btnCancelar" type="submit" name="accion">Cancelar</button>

		 		</form>
		 	</div>
		 </div>			 
	</div>	 
</div>
 


















<!--                     Termina contenido                            -->
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>


