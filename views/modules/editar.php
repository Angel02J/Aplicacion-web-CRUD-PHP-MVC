<?php

session_start();

if(!$_SESSION["validar"]){

	header("location:ingresar");

	exit();
	
}

?>


<h1>EDITAR USUARIO</h1>

<form method="post">

<?php

$editarUsuario = new MvcController();
$editarUsuario -> editarUsuarioController();
$editarUsuario -> actualizarUsuarioController();

?>

</form>