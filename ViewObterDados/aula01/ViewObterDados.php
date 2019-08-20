<?php

include_once("obterDados.php");

if(!empty($_POST['form_submit'])){

    obterDados($_POST);
}

?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Aula TAI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

 <body>
 <div class="container">
  <div class="row">
    <div class="col-12">

    <form class="form" method="post" action="ViewObterDados.php">
        <input type="hidden" name="form_submit" value="ok"/>
        
        <button type="submit" class="btn btn-primary btn-block">
            <b> Obter Dados Post </b>
        </button>
    <br>

   
    <div class="row">
        <div class="col-sm-6">
                <label>CPF:</label> 
                <input type="text" class="form-control" name="cpf" maxlenght="15" placeholder="000.000.000-00">
            
        </div>
        <div class="col-sm-6">
                <label> Nome:</label> 
                <input type="text" class="form-control" name="nome"  placeholder="Digite seu nome" require autofocus>    
        </div>
        <div class="col-sm-6">
                <label> Telefone:</label> 
                <input type="text" class="form-control" name="telefone" maxlenght="12" placeholder="(DD)0000-0000" require autofocus>
                
        </div>
    </div>
    </form>
       
    </div>
  </div>
</div>
    



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   

    </body>
    

 </html>