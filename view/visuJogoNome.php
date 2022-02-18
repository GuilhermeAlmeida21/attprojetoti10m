<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogosmodel.php");
?>

<div class="centroform" >
<form action="#" method="Post" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Nome do Jogo</label>
    <div class="input-group">
      <div class="input-group-text">Nome</div>
      <input type="text" name="nomejogo" class="form-control" id="inlineFormInputGroupUsername" placeholder="Nome do Jogo">
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
$nomejogo = isset($_POST["nomejogo"])? $_POST["nomejogo"] : ""; 


if($nomejogo){
    $dado = visuJogoNome($conn,$nomejogo);
foreach($dado as $nomeJogos):
?>
    <tr>
      <th scope="row"><?=$nomeJogos["idjogo"];?></th>
      <td><?=$nomeJogos["nomejogo"]?></td>
      <td><?=$nomeJogos["generojogo"]?></td>
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