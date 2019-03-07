<?php

require_once("config.php");

//para carregar apenas um umusuário
/*$root = new Usuario();
  $root->loadbyID(3);
  echo $root;*/

//para carregar uma lista de usuários
/*$lista = Usuario::getList();
echo json_encode($lista);*/

//carregar umalista de usuario buscando pelo login
/*$search = Usuario::search("jo");
echo json_encode($search);*/

//carregar um usuario usando o login e senha
//$usuario= new Usuario();
//$usuario->login("root","!@#$");

//echo $usuario;

//criando um novo usuário com INSERT
/*$aluno= new Usuario("aluno", "@1un0");
$aluno->insert();
echo $aluno;*/

$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor", "profes");

echo $usuario;



// código incial antes de montar o código de usuários

/*$sql= new Sql();

$usuarios = $sql->select("select * from tb_usuarios");

echo json_encode($usuarios);*/


?>