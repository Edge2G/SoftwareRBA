<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

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
  <a class="navbar-brand" data-toggle="link" href="<?php echo site_url('CrudController/index')?>">Menu de administracion</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <li> </li>
  <div class="navbar-collapse collapse " id="navbarNavAltMarkup">
    <div class="nav navbar-nav">
      <a class="nav-item nav-link" data-toggle="modal" data-target="#exampleModal" href="#">Crear Usuario</a>
    </div>
  </div>
  <div class="navbar-collapse collapse w-200 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Login/Logout');?>">Cerrar Sesion</a>
            </li>
        </ul>
    </div>

</nav>
	<div class="container">
  <br>
  <br>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <form method="post" action="<?php echo site_url('CrudController/create')?>">
                  <div class="form-group">
                    <label for="exampleInputUsername1">Nombre de Usuario</label>
                    <input type="username" class="form-control" name="nombre" placeholder="Escriba aqui un nombre de usuario">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" name="password" placeholder="Escriba aqui una contraseña">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Correo electronico</label>
                    <input type="email" class="form-control" name="mail" aria-describedby="emailHelp" placeholder="Escriba una direccion de correo electronico">
                    <small id="emailHelp" class="form-text text-muted">Los correos no son compartidos con nadie.</small>
                  </div>                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">rol</label>
                    <input type="number" min="1" max="3" class="form-control" name="rol" placeholder="Ingrese un Rol siendo 1)admin;2)Jefe Finanzas;3)Jefe Inventario">
                  </div>
                  <button type="submit" class="btn btn-primary" value="save">Crear</button>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
		<br>

		<table class="table">
  			<thead>
    			<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Mail</th>
          <th scope="col">Rol</th>
          <th scope="col">Accion</th>
    			</tr>
  			</thead>
  			<tbody>
					<?php foreach($result as $row) {?>
          <tr>
          <td><?php echo $row->nombre; ?></td>
          <td><?php echo $row->mail; ?></td>
          <td><?php echo $row->rol; ?></td>
          <td> <a href="<?php echo site_url('CrudController/edit');?>/<?php echo $row->id;?>"> Editar </a> | 
          <a href="<?php echo site_url('CrudController/delete');?>/<?php echo $row->id;?>">Eliminar</a></td>
          <?php } ?>
 			 </tbody>
		</table>
    <table>
      <thead>
        <tr>
          <th>ID Rol        |</th>
          <th>Tipo de Rol</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1    </td>
          <td>Administrador</td>
        </tr>
        <tr>
          <td>2    </td>
          <td>Jefe Finanzas</td>
        </tr>
        <tr>
          <td>3    </td>
          <td>Jefe Inventario</td>
        </tr>
      </tbody>
    </table>   
	</div>
</body>
</html>