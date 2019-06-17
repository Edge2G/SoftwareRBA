<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      body{
        background: url("http://localhost/SoftwareRBA/assets/img/login/fondo.jpg");
        background-size: cover;
        background-position: center;
          }
      
      .login_box{
        width: 320px;
        height: 320px;
        background: #000;
        color: #fff;
        top: 50%;
        left: 48%;
        position: absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
      }
    </style>
    <title>Inicio de sesion - RBA</title>
  </head>
  <body>
    <img src="http://localhost/SoftwareRBA/assets/img/login/login_box.png" class="login_box">
    <div class="container">
    <div class="col-sm-4 offset-sm-4 col-xl-3 text-center">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <form class="form-inlin justify-content-center">
        <div class="form-group">
        <label for="InputUsername">Nombre de usuario</label>
        <input type="username" class="form-control" id="Username" aria-describedby="emailHelp" placeholder="Ingresar nombre de usuario">
        </div>
        <div class="form-group">
        <label for="InputPassword">Contraseña</label>
        <input type="password" class="form-control" id="Password" placeholder="Ingresar contraseña">
        </div>
        <button type="submit" class="btn btn-primary">Iniciar sesion</button>
        </form>
    </div>
    </div>
  </body>
</html>