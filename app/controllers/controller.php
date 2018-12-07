<?php
session_start();
switch ($_POST["action"]) {
    case 'Cadastrar': cadastrar($_POST["email"], $_POST["nome"], $_POST["curso"]);
        break;
}

function cadastrar($email, $nome, $curso) {
      $dataCriacao = date('d/m/y');
      include '../core/Usuario.php';
      $obj = new usuario();
      $obj->salvarinformacoes($email, $nome, $curso);
      echo ($_SESSION['mensagercio'] = "Cadastro realizado com sucesso!");
}

?>
