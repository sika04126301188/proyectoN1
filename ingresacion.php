<?php


  $pnombre =$_POST["pnombre"];
  $snombre =$_POST["snombre"];
  $apellido=$_POST["apellido"];
 $cedula = $_POST["cedula"];
 $Ubicacion = $_POST["Ubicacion"];
$pais   = $_POST["pais"];
$direccion  = $_POST["direccion"];
$genero = $_POST["genero"];
$fecha  = $_POST["fecha"];
$email   = $_POST["email"];
$telefono   = $_POST["telefono"];
$edad   = $_POST["edad"];
$statu   = $_POST["statu"];
$Comentarios  = $_POST["Comentarios"];


$dep=$_GET ['Espanol'];    if($dep != null) $dep1=$dep;
$dep=$_GET ['Feances'];    if($dep != null) $dep1=$dep;
$dep=$_GET ['Portuges'];     if($dep != null) $dep1=$dep;
$dep=$_GET ['Italiano'];     if($dep != null) $dep1=$dep;
$dep=$_GET ['Engles'];     if($dep != null) $dep1=$dep;
$dep=$_GET ['Arabe']; if($dep != null) $dep1=$dep;

echo" <B>P.Nombre de Estudiante: </B> \n" ,$pnombre, "<BR>\n"; 
echo" <B>S.Nombre de Estudiante: </B> \n" ,$snombre, "<BR>\n"; 
echo "<B>Apellidos de estudiante: </B>\n",$apellido,"<BR>\n"; 
echo "<B>Numero de pasaporte : </B>\n",$cedula,"<BR>\n";
echo "<B>Genero: </B>\n",$genero,"<BR>\n";
echo "<B>Ubicacion : </B>\n",$Ubicacion,"<BR>\n";
echo "<B>De : </B>\n",$pais,"<BR>\n";  
echo "<B>Direccion : </B>\n",$direccion,"<BR>\n";
echo "<B>Fecha De Ncimiento: </B>\n",$fecha,"<BR>\n";
echo "<B>Emil : </B>\n",$email,"<BR>\n"; 
echo "<B>Telefono: </B>\n",$telefono,"<BR>\n";  
echo "<B>Edad : </B>\n",$edad,"<BR>\n";  
echo "<B>Estudiante Internacional: </B>\n",$statu,"<BR>\n";  
echo "<B>Comentarios: </B>\n", $Comentarios, "<BR>\n";


?>