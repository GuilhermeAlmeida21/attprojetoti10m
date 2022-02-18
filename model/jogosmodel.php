<?php

function inserirJogo($conn,$codigojogo,$nomejogo,$valorjogo,$generojogo,$qtdjogo,$datalancamentojogo,$studiojogo){
    $query = "INSERT INTO `tbjogos` (`idjogo`, `nomejogo`, `valorjogo`, `generojogo`, `qtdjogo`, `datalancamentojogo`, `studiojogo`) VALUES (NULL, '{$codigojogo}', '{$nomejogo}', '{$valorjogo}', '{$generojogo}', '{$qtdjogo}', '{$datalancamentojogo}', '{$studiojogo}')";
    $dados = mysqli_query($conn,$query);
    return $dados; 
}

function visuJogoNome($conn,$nomejogo){
    $query = "select * from tbjogos where nomejogo like '%{$nomejogo}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;  
}

function visuJogoGenero($conn, $generojogo){
    $query = "select * from tbjogos where generojogo like '%{$generojogo}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado; 
}
function visuJogoCodigo($conn, $codigojogo){
    $query = "select * from tbjogos where idjogo like '%{$codigojogo}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado; 
}

?>