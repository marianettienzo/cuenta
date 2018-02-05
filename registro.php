<?php
include("formulario.php");
$db_connection = mysqli_connect("localhost", "root", "", "formulario");
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$pass = $_POST['pass'];
///BASE DE DATOS///
$db_name = "formulario";
$db_host = "localhost";
$db_password="";
$db_user= "root";
$db_table_name= "usuarios";

if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['pass']) && !empty($_POST['pass']))
{

$con=mysqli_connect($host, $user, $pw);

$result = mysqli_select_db($db,$con);
echo $result;
 
$resu = mysqli_query("INSERT INTO usuarios (nombre, email, pass) VALUES ('$_POST[nombre]' , '$_POST[pass]' , '$_POST[email]')",$con); 
echo $resu;


}
?>