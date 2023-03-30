<?php
include("../models/conexao.php");

$varAlunoCodigo = $_POST["alunoCodigo"];
$varAlunoNome = $_POST["alunoNome"];
$varAlunoCidade = $_POST["alunoCidade"];
$varAlunoSexo = $_POST["sexo"];

mysqli_query($conexao, "update alunos set nome='$varAlunoNome', cidade='$varAlunoCidade', sexo='$varAlunoSexo' where codigo='$varAlunoCodigo'");

header("location:../index.php");

?>