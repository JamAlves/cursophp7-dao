<?php 

require_once("config.php");


//Carrega um usuario
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega um lista de usuarios buscando pelo login
//$search = Usuario::search("ro");
//echo json_encode($search);


//carrega um usuario o login e a senha

$usuario = new Usuario();
$usuario->login("Julia", "252502");

echo $usuario;


/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/
 ?>