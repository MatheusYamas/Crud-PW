<?php
include("blades/header.php")
?>
<div class="container border rounded mt-5 p-5 bg-white">

<form action="../controllers/cadastrarAluno.php" method="post">
    
    <label class="form-label"><b>Nome</b></label><br>
    <input class="form-control" type="text" name="alunoNome"><br>
    <label class="form-label"><b>cidade</b></label><br>
    <input class="form-control" type="text" name="alunoCidade"><br>

    <div class="my-3 row">
    <label class="form-label"><b>Sexo</b></label>
        <div class="my-3 col">
            <input class="form-check-input" type="radio" name="sexo" value="m">
                <label class="form-label">Masculino</label>
            <input class="form-check-input" type="radio" name="sexo" value="f">
            <label class="form-label">Feminino</label>
        </div>    
    </div>

    <input class="btn btn-success" type="submit" value="cadastrar">

</form>

</div>
<?php
include("blades/footer.php")
?>