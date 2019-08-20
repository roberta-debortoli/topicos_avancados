<?php

error_reporting(E_ALL);
ini_set("display_errors",1);

include_once('escreverArquivoArray.php');

  $pessoas = array(
    "000.000.000.01" => array (
      "nome"=>"Carlos Eduardo",
      "endereço"=>"Rua Manuel Vieira,200",
      "telefone"=> "(41)3422-2829",
    ),
    
    "000.000.000.02" => array (
      "nome"=>"Isabela Battistella",
      "endereço"=>"Rua  Antonio XVI,507",
      "telefone"=> "(49)3422-2854",
    )
  );

  
  escreverArquivoArray($pessoas);
  

?>