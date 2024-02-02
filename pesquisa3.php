<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <title>Pesquisa 3</title>
</head>
<body>
    <main>
        <div>
           <fieldset><legend><h2>NilMar enterprise</h2></legend>
            <legend><h2> 
           <?php
             echo "<p>", $_GET["nome"], " ,estamos consultando seu endereço, confira abaixo:</p>"
            ?> 
            </h2></legend>
          
           <?php

function get_endereco($cep){

  $cep = preg_replace("/[^0-9]/", "", $cep);
  $url = "http://viacep.com.br/ws/$cep/xml/";
  $xml = simplexml_load_file($url);
  return $xml;
}

?>
<?php if($_GET['cep']){ ?>

<p>
  <?php $endereco = get_endereco($_GET['cep']); ?>
  <b>CEP: </b> <?php echo $endereco->cep; ?><br>
  <b>Logradouro: </b> <?php echo $endereco->logradouro; ?><br>
  <b>Bairro: </b> <?php echo $endereco->bairro; ?><br>
  <b>Localidade: </b> <?php echo $endereco->localidade; ?><br>
  <b>UF: </b> <?php echo $endereco->uf; ?><br>
</p>
<?php } 
$dataHoje = date('d/m/Y');
echo "<p>Hoje é $dataHoje</p>"?>
               </fieldset>
</div>



<?php 

?>
</form>
</body>
</html>


        