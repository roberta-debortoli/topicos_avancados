<?php

function obterDadosMontarArray($post){

$dados= array (
$post['cpf']=> array("nome" => $post ["nome"], "telefone" =>$post['telefone'])
);

print_r($dados);

}

?>