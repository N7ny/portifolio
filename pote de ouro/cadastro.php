<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="cadastro.css">
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
  <main1 js>
    <script>
      function myFunction() {
    var x = document.getElementById("senha");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
    </script>
  </main1>
  <main2 > <br><br><br><br><br> <center>    
    <form action="cadastro2.php" method="post" id="form">
      <p id="cadastro">Cadastro</p>
      Nome: <input type="text" name="nome" id="nome" required> <br>
      Email: <input type="email" name="email" id="email" required> <br>
      Senha: <input type="password" name="senha" id="senha" required> <br>
      <input type="checkbox" onclick="myFunction()">mostrar senha <br>
      Data de Nascimento: <input type="date" name="data" id="data" required> <br> 

      <button type="button" id="termo" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      Termos de Uso
      </button> <br>
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" termo1>
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Termos de Uso</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" termo2>
              Termos de Serviço para Sorteador <br>
                1. Aceitação dos Termos
                Ao utilizar o sorteador, você concorda em cumprir e aceitar todos os termos e condições
                estabelecidos neste documento. Se você não concordar com algum dos termos, não utilize o
                sorteador. <br>
                2. Uso Responsável
                O sorteador destina-se apenas ao uso pessoal e não comercial. Você concorda em utilizar o
                serviço de forma responsável e em conformidade com todas as leis e regulamentos aplicáveis. <br>
                3. Propriedade Intelectual
                Todo o conteúdo relacionado ao sorteador, incluindo logotipos, marcas registradas, textos,
                gráficos, imagens e software, é de propriedade exclusiva do proprietário do sorteador. Você
                concorda em não copiar, modificar, distribuir ou criar trabalhos derivados desse conteúdo sem
                permissão prévia por escrito. <br>
                4. Privacidade
                Ao utilizar o sorteador, você concorda com a coleta e o uso de suas informações pessoais
                conforme descrito na Política de Privacidade do sorteador. <br>
                5. Responsabilidade
                O sorteador é fornecido "no estado em que se encontra", sem garantias de qualquer tipo. O
                proprietário do sorteador não se responsabiliza por quaisquer danos diretos, indiretos,
                incidentais, consequenciais ou especiais decorrentes do uso ou incapacidade de usar o
                sorteador. <br>
                6. Modificações dos Termos
                O proprietário do sorteador reserva-se o direito de modificar ou atualizar estes termos a
                qualquer momento, sem aviso prévio. É sua responsabilidade verificar regularmente os termos
                para estar ciente de quaisquer alterações. <br>
                7- Parte do prêmio
                Ao utilizar desse software, o usuário, concorda em caso senha premiado na loteria federal, ele
                irá dar 10% do prêmio aos criadores do sorteador. <br>
                Ao utilizar o sorteador, você concorda em cumprir estes termos e condições. Se você não
                concordar com algum dos termos, não utilize o sorteador. <br>
                <input type="checkbox" name="termo" id="termo" required>Li e concordo com os Termos de Uso 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>
     <br>
      <input type="submit" value="acessar" id="botao"><br>
      <a href="login.php">ja tenho conta</a>
      </center>
    </form>
  </main2>
  <footer>
    Desenvolvido por Ana, Nycolas, Adelia, Nayra, Juliana
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</body>

</html>