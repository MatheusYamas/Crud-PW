<?php
include("../models/conexao.php");
include("blades/header.php");
?>

<div class="container p-5 mt-5 border bg-white">
    
<?php
$query = mysqli_query($conexao, "select * from alunos where codigo = 4");
$exibe = mysqli_fetch_array($query);
?>

    <form action="../controllers/atualizarAluno.php" method="post">
        <input class="form-control" type="hidden" name="alunoCodigo" value="<?php echo $exibe[0]?>"><br>
        <label class="form-label" ><b>Nome</b></label><br>
        <input class="form-control" type="text" name="alunoNome" value="<?php echo $exibe[1]?>"><br>
        <label class="form-label" ><b>Cidade</b></label><br>
        <input class="form-control" type="text" name="alunoCidade" value="<?php echo $exibe[2]?>"><br>
        <label  class="form-label" ><b>Sexo</b></label>
        <br>
        Masculino <input type="radio" name="sexo" value="m" <?php echo ($exibe[3] =="m")?"checked":""; ?>> <br>
        Feminino <input type="radio" name="sexo" value="f" <?php echo ($exibe[3] =="f")?"checked":""; ?>> <br>
        <br>
        <input class="btn btn-success" type="submit" value="atualizar"> 
    </form>
    
</div>

<?php
include("blades/footer.php")
?>