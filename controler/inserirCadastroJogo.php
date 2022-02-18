<?php

include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogosmodel.php");
extract($_REQUEST,EXTR_OVERWRITE);

if(inserirJogo($conn,$codigojogo,$nomejogo,$valorjogo,$generojogo,$qtdjogo,$datalancamentojogo,$studiojogo)){
echo("Jogo cadastrado com sucesso!!");
}else{
echo("Não foi possível cadastrar o jogo");
}
include_once("../view/footer.php")
?>