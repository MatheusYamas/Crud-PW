<?php

include("../models/conexao.php");

$varIda = $_GET["ida"];
mysqli_query($conexao, "delete from alunos where codigo = $varIda");

header("location: ../index.php");

?>