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

    <title>Inventario</title>
  </head>
  <body>
	<!-- As a link -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Menu de Inventario</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" data-toggle="modal" data-target="#exampleModal" href="#">Ingresar Producto</a>
    </div>
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
              <h5 class="modal-title" id="exampleModalLabel">Ingresar Producto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <form method="post" action="<?php echo site_url('producController/create')?>">
                  <div class="form-group">
                    <label for="InputNombre">Nombre Producto</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Escriba aqui la cantidad a ingresar">
                  </div>
                  <div class="form-group">
                    <label for="InputTipo">ID Tipo de Producto</label>
                    <input type="number" class="form-control" name="id_tipo_producto" aria-describedby="emailHelp" placeholder="Escriba una la fecha de ingreso del productro">
                  </div> 
                  <div class="form-group">
                    <label for="InputCantidad">Cantidad</label>
                    <input type="number" class="form-control" name="cantidad" aria-describedby="emailHelp" placeholder="Escriba una la fecha de ingreso del productro">
                  </div>
                  <div class="form-group">
                    <label for="InputFecha">Fecha de ingreso</label>
                    <input type="date" class="form-control" name="fecha_ingreso" aria-describedby="emailHelp" placeholder="Escriba una la fecha de ingreso del productro">                   
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
      		<th scope="col">ID</th>
					<th scope="col">Nombre</th>
					<th scope="col">Tipo</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Fecha ingreso</th>
    			</tr>
  			</thead>
  			<tbody>
					<?php foreach($result as $row) {?>
          <tr>
          <th scope="row"> <?php echo $row->id; ?></th>
          <td><?php echo $row->nombre; ?></td>
          <td><?php echo $row->id_tipo_producto; ?></td> 
          <td><?php echo $row->cantidad; ?></td>
          <td><?php echo $row->fecha_ingreso; ?></td>
          <td> <a href="<?php echo site_url('producController/edit');?>/<?php echo $row->id;?>"> Editar </a> | 
          <a href="<?php echo site_url('producController/delete');?>/<?php echo $row->id;?>">Eliminar</a></td>
          <?php } ?>
 			 </tbody>
		</table>
	</div>
</body>
</html>