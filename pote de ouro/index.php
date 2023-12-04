<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css" type="text/css">
    <title>Pote de Ouro</title>
    <link rel="icon" type="image/x-icon" href="pote.ico">
</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" >
    <div class="container-fluid" id="nav">
      <a class="navbar-brand" href="index.php" id="icon";>
        <img src="pote.png" alt="pote" width="90">
      </a>
      <a class="navbar-brand" href="login.php" id="user">
        <img src="profile.png" alt="pote" width="90">
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      </div>
    </div>
</header>  
<main>
    <form action="pagina2.php" method="POST">
      <h1>Sorteador de Números</h1> <br>
        <input type="submit" name="sortear5" value="Sortear 5 Números"> <br> <br>
        <input type="submit" name="sortear6" value="Sortear 6 Números"> <br> <br>
        <input type="submit" name="sortear7" value="Sortear 7 Números"> <br> <br>
        <input type="submit" name="sortear20" value="Sortear 20 Números"> <br> <br>
    </form>
 <div class="presentation">
    <div class="card" style="width: 18rem;" id="card1">
      <img src="https://img.olhardigital.com.br/wp-content/uploads/2022/10/mega-sena-1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Concurso nº 2670 <br>
          Mega sena da Virada</h5>
        <p class="card-text">Encerramento das Apostas: 31/12/2023 17h00 <br>
          Data do Sorteio: 31/12/2023 20h00 <br>
          Estimativa de prêmio: R$ 550.000.000,00</p>
        <a href="#" class="btn btn-primary" id="valor">Valor da Aposta: <br> R$ 5,00</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;" id="card1">
      <img src="https://tvebrasil.com.br/wp-content/uploads/2019/04/quina-1200x600.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Quina <br>
          Concurso nº 6298 </h5>
        <p class="card-text">Encerramento das Apostas: 23/11/2023 19h00 <br>
          Data do Sorteio: 23/11/2023 20h00 <br>
          Estimativa de prêmio: R$ 8.500.000,00 <br>
          Valor mínimo do carrinho: R$ 30,00</p>
        <a href="#" class="btn btn-primary" id="valor">Valor da Aposta: <br> R$ 2,50</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;" id="card1">
      <img src="https://www.acheconcursos.com.br/media/post/54140/1400/milionaria-2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">+Milionária <br> 
          Concurso nº 98</h5>
        <p class="card-text">Encerramento das Apostas: 25/11/2023 19h00 <br>
          Data do Sorteio: 25/11/2023 20h00 <br>
          Estimativa de prêmio: R$ 101.000.000,00</p>
        <a href="#" class="btn btn-primary" id="valor">Valor da Aposta: <br> R$ 6,00</a>
      </div>
    </div>
  </div>
  <img src="https://images.vexels.com/media/users/3/149909/isolated/preview/d2def5151770e8b0923578cad4b4369e-leprechaun-com-desenho-de-cana.png" height="100" width="100" id="lepra">
</main>
<footer style="color: white;">
    Desenvolvido por Ana, Nycolas, Adelia, Nayra, Juliana
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>