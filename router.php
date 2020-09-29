<?php 
	if ($_POST) {
		switch ($_POST['function']) {
			case 'saludar':
				echo json_encode(['saludo' => "Hola Camila"]);
				break;
			
			default:
				# code...
				break;
		}
	}
 ?>