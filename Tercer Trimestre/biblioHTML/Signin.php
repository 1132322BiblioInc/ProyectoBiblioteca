<?php
#$email=$_POST["email_r"];
#$password=$_POST["password_r"];
#$password2=$_POST["password_r2"];

#require_once'conexion.php'

#if (filter_var($email_r,FILTER_VALIDE_EMAIL) ) {
  
#   if ($password==$password2) {

#       $validacion = "SELECT email FROM login WHERE email=$email";
          
#        $resultado = $db->query($validacion);

#       if ($resultado->cubrid_num_rows>0) {
       	
      
#       }else
#       {

 #            $hash= password_hash($password,PASSWORD_DEFAULT);
 #       $query= "INSERT INTO login(email,password)values ('$email','$hash')";

  #       if ($db->query($query)) 
   #      {
    #        echo "El usuario se registro correctamente";
     #    } else
    #            {
   #               echo "Error al registrarse";
   #             }  	     
    #   }
    
 #   }else {
  #           echo "password no considen";
#          }

#} else
 #    {
 #      echo "el email no es valido";
  #   }

$email=$_POST['email_r'];
$password=$_POST['password_r'];
$password2=$_POST["password_r2"];
 require("conexion.php");

 $checkemail=mysql_query("SELECT * FROM login WHERE email='$email");
 $check_email= mysql_num_rows($$checkemail);
  
  if ($password==$password2) {
    if ($check_email>0) {
     echo '<script language="javascript">alert("atencion ya existe el email designado por un usuario verifique sus datos");</script>';
    }else{

      mysql_query("INSERT INTO login values ('','$email','password','')");

      echo '<script language="javascript">alert("usuario registrado con exito");</script>';
      mysql_close($link);
    }

  }else{
    echo 'las contraseñas son correctas';
  }


?>
