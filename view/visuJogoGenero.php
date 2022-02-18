<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogosmodel.php");
?>

<div class="centroform" >
<form action="#" method="Post" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Gênero do Jogo</label>
    <div class="input-group">
      <div class="input-group-text">Gênero</div>
      <input type="text" name="generojogo" class="form-control" id="inlineFormInputGroupUsername" placeholder="Gênero do Jogo">
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Pesquisar</button>
  </div>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Gênero</th>
    </tr>
  </thead>
  <tbody>
<?php
$generojogo = isset($_POST["generojogo"])? $_POST["generojogo"] : ""; 

if($generojogo){
    $dado = visuJogoGenero($conn,$generojogo);
foreach($dado as $generoJogos):
?>
    <tr>
      <th scope="row"><?=$generoJogos["idjogo"];?></th>
      <td><?=$generoJogos["nomejogo"]?></td>
      <td><?=$generoJogos["generojogo"]?></td>
    </tr>
<?php
endforeach;
}
?>   
    
  </tbody>
</table>

</div>
<?php
include_once("../view/footer.php");
?>