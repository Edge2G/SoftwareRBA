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

    <title>Administracion</title>
  </head>
  <body>
  <!-- As a link -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Menu de administracion</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">

    </div>
  </div>
</nav>
    <div class="container">
    <form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->id?>">
        <div class="form-group">
        <label for="exampleInputUsername1">Nombre de Usuario</label>
        <input type="username" class="form-control" name="nombre" placeholder="Escriba aqui un nombre de usuario" value=<?php echo $row->nombre;?>>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="text" class="form-control" name="password" placeholder="Escriba aqui una contraseña" value=<?php echo $row->password;?>>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Correo electronico</label>
        <input type="email" class="form-control" name="mail" aria-describedby="emailHelp" placeholder="Escriba una direccion de correo electronico" value=<?php echo $row->mail;?>>
        <small id="emailHelp" class="form-text text-muted">Los correos no son compartidos con nadie.</small>
        </div>
        <button type="submit" class="btn btn-primary" value="save">Editar</button>
    </form>
    </div>
  </body>
</html>