<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="login.css">
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
  <main> <br><br><br><br><br> <center> 
    <form action="login2.php" method="post">
      <h2>Login</h2>
  
  <label for="name">Nome:</label>
  <input type="text" id="name" name="name" required>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

  <label for="password">Senha:</label>
  <input type="password" id="password" name="password" required>

  <button type="submit">Login</button> <br> <br>
      <a href="cadastro(1).php">Não tenho conta</a>
      
    </form>
    </center>
  </main>
  <main2 js>
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
  </main2>
  
  <footer>
    Desenvolvido por Ana, Nycolas, Adelia, Nayra, Juliana
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</body>
</html>