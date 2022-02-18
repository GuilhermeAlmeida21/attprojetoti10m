<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogosmodel.php");
?>

<div class="centroform" >
<form action="#" method="Post" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">ID do Jogo</label>
    <div class="input-group">
      <div class="input-group-text">ID</div>
      <input type="number" name="idusu" class="form-control" id="inlineFormInputGroupUsername" placeholder="ID">
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
      <th scope="col">E-mail</th>
      <th scope="col">Fone</th>
    </tr>
  </thead>
  <tbody>
<?php
$codigojogo = isset($_POST["idjogo"])? $_POST["idjogo"] : ""; 

if($codigojogo){
  $dado = visuJogoCodigo($conn,$codigojogo);



foreach($dado as $codigojogos):
?>
    <tr>
      <th scope="row"><?=$codigojogos["idusu"];?></th>
      <td><?=$codigojogos["nomejogo"]?></td>
      <td><?=$codigojogos["generojogo"]?></td>
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