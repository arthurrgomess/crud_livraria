<?php

include "../infra/conexao.php";

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$ano = $_POST["ano"];
------------------------------------ //alteração : Criei o "Prepared Statement" para ter uma segurança maior entre Mysql

$sql = "INSERT INTO livros (titulo, autor, ano) VALUES (?, ?, ?)";

$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($stmt, "ssi", $titulo, $autor, $ano);

mysqli_stmt_execute($stmt);
-----------------------------------------------

header("Location: ../index.php");
exit();

?>