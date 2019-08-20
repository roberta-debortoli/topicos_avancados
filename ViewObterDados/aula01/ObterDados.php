<?php

function obterDados($post){

$dados=$post['cpf']." - ".$post['nome']." - ".$post['telefone'];

echo "<script> alert ('".$dados."')</script>";
}

?>