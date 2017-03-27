<?php
#$email=$_POST['email'];
#$password =$_POST['password'];

#require_once'conexion.php';

#$query = "SELECT email,password FROM login WHERE email= '$email'";

#if ($resultado= $db->query($query)) 
#{
	#if ($resultado->num_rows>0) 
	#{
		#$row =$resultado->fetch_assoc();

		#if (password_verify($password,$row['password'])) {
		#	echo "login exitoso";
		#}else
		#{
		#	echo "los datos son incorrectos";
		#}
	#}
#}
require("conexion.php");
$email = $_POST['emai_1l'];
$password=$_POST['password'];

$sql=mysql_query("SELECT * FROM login WHERE email='$email");
if ($f=mysql_fetch_array($sql))
{

	if ($password=$f['password']) {
		header("Location:InterfazUsuario.html");
	}else{
		echo '<script>alert("este usuario no existe, porfavor registre para poder ingresar")</script>';
		echo "<script>Location.herf='Login.html'</script>";
	}
}

?>