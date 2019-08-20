<?php
error_reporting(E_ALL);
INI_SET("display_errors",1);
include_once("LoadTabelaArray.php");
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Aula TAI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

 <body role="document">
    <div class="row">
    <div class="col-12">
      <table class='table table-striped'>
      <thead>
        <tr>
          <th> CPF:</th>
          <th> NOME:</th>
          <th> ENDEREÇO:</th>
          <th> TELEFONE:</th>
          <th> AÇÕES:</th>
        </tr>
      </thead>
      <tbody>
        <?php loadTabela(); ?>
      </tbody>
      </table>
    </div>
    </div>
  </body>

 </html>