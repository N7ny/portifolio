<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="pagina2.css">
    <title>Pote de Ouro</title>
    <link rel="icon" type="image/x-icon" href="pote.ico">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary" >
    <div class="container-fluid" id="nav">
      <a class="navbar-brand" href="index.php" id="icon">
        <img src="pote.png" alt="pote" width="90">
      </a>
      <a class="navbar-brand" href="login.php" id="user">
        <img src="profile.png" alt="pote" width="90">
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      </div>
    </div>
</header>
<main> <br><br><br><br>
<center>
<div id="centro"> 
    <table style="font-size: 200%;">
        <th>Seus Números:</th>
        </table>
        <form action="index.php" method="post" style="font-size: 200%;">
<?php
    function sorteiaNumeros($quantidade) {
        $numerosSorteados = array();
        for ($i = 0; $i < $quantidade; $i++) {
            $numero = rand(1, 60); // Gera um número aleatório entre 1 e 100
            $numerosSorteados[] = $numero;
        }
        return $numerosSorteados;
    }
   
    if (isset($_POST['sortear5'])) {
        $numerosSorteados = sorteiaNumeros(5);
        echo "Números sorteados (5 números): <br>" . implode(", ", $numerosSorteados);
       
    } elseif (isset($_POST['sortear6'])) {
        $numerosSorteados = sorteiaNumeros(6);
        echo "Números sorteados (6 números): <br>" . implode(", ", $numerosSorteados);
       
    } elseif (isset($_POST['sortear7'])) {
        $numerosSorteados = sorteiaNumeros(7);
        echo "Números sorteados (7 números): <br>" . implode(", ", $numerosSorteados);
    }elseif (isset($_POST['sortear20'])) {
        $numerosSorteados = sorteiaNumeros(20);
        echo "Números sorteados (20 números): <br>" . implode(", ", $numerosSorteados);
    }
?> <br>
        <input style="background-color: rgb(5, 188, 5); color: aliceblue; font-size: 100%;" type="submit" value="Sortear de novo">
        <br> <br> <br>
    </div>
    </form>
</center>
    <img src="https://images.vexels.com/media/users/3/149909/isolated/preview/d2def5151770e8b0923578cad4b4369e-leprechaun-com-desenho-de-cana.png" height="100" width="100" id="lepra2">
</main>
    <footer>
        Desenvolvido por Ana, Nycolas, Adelia, Nayra, Juliana
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
    
</body>
</html>
  
