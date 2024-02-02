<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <title>Pesquisa 2</title>
</head>
<body>
    <main>
        <div>
           <fieldset><legend><h2>NilMar enterprise</h2></legend><legend> <h1><?php
           if(isset($_GET["nome"])){
            $nome = addslashes($_GET["nome"]);
            echo 'Olá ' . $nome . ', insira seu CEP:';
          

?></h1></legend>
            <form id="pg2" action="pesquisa3.php" method="get"> 
                <input type="text" method="get" name="cep">
                <?php
                        echo "<input type='hidden' name='nome'  value='$nome'>";
                    ?>
                <button type="submit">continuar</button>
            </form>
           <a href="pesquisa.php"> <button type="submit">voltar</button></a>
            </fieldset>
       <?php 
        }
        else {
            header('Location:pesquisa.php');
        }
       ?>
              
</div>
</body>
</html>