<?php
	if(isset($_POST['submit'])){
		$nombre=$_POST['nombre'];
		$email=$_POST['email'];
		$asunto=$_POST['asunto'];
		$mensaje=$_POST['mensaje'];
		$to='franco.oubel@gmail.com';
		$message="Nombre :".$nombre."\n"."asunto :".$asunto."\n"."Este es el mensaje :"."\n\n".$mensaje;
		$headers="From: ".$email;



		if(mail($to, $asunto, $message, $headers)){
			echo "<h1>¡Enviado exitosamente, gracias,"." ".$nombre.", te contactaré pronto!</h1>";
		}
		else{
			echo "Intenta nuevamente, por favor.";
		}
	} 
?>