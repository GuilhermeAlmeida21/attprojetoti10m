<?php
include_once("header.php");
?>

<div class="container">
<form class="row g-3" action="../controler/inserirCadastroJogo.php" method="Get">
  <div class="col-md-6">
    <label for="inputNome" class="form-label">Nome do Jogo</label>
    <input type="text" name="nomejogo" class="form-control" id="inputNomeJogo">
  </div>

  <div class="col-md-6">
    <label for="inputGenero" class="form-label">Gênero</label>
    <input type="text" name="generojogo"class="form-control" id="inputGenero">
  </div>

  <div class="col-2">
    <label for="inputVal" class="form-label">Valor</label>
    <input type="text" name="valorjogo" class="form-control" id="inputVal" placeholder="">
  </div>

  <div class="col-2">
    <label for="inputData" class="form-label">Data de Lançamento</label>
    <input type="text" name="datalancamentojogo" class="form-control" id="inputData" placeholder="DD/MM/AAAA">
  </div>

  <div class="col-md-2">
    <label for="inputqtd" class="form-label">Quantidade de Cópias</label>
    <input type="text" name="qtdjogo"class="form-control" id="inputqtd">
  </div>

  <div class="col-md-6">
    <label for="inputDev" class="form-label">Desenvolvedor</label>
    <input type="text" name="studiojogo" class="form-control" id="inputDev">
  </div>
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>

</div>
<?php
include_once("footer.php");
?>
