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

    <title>Jefe de Finanzas</title>
  </head>
  <body>
	<!-- As a link -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo site_url('Factura/index')?>">Menu Jefe de Finanzas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <li> </li>
  <div class="navbar-collapse collapse " id="navbarNavAltMarkup">
    <div class="nav navbar-nav">
      <a class="nav-item nav-link" data-toggle="modal" data-target="#exampleModal2" href="#">Crear Cliente</a>
      <a class="nav-item nav-link" data-toggle="modal" data-target="#exampleModal" href="#">Crear Factura</a>
      
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo site_url('Factura/verFact')?>">Ver Facturas </a>
      </li>
    </div>
    
  </div>

  <div class="navbar-collapse collapse w-200 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('login/Logout');?>">Cerrar Sesion</a>
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
              <h5 class="modal-title" id="exampleModalLabel">Crear Factura</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <form method="post" action="<?php echo site_url('Factura/create')?>">
                  <div class="form-group">
                    <label for="#">Numero de factura</label>
                    <input type="number" class="form-control" name="numero_factura" placeholder="Escriba aqui el numero de factura">
                  </div>
                  <div class="form-group">
                    <label for="#">Cliente</label>
                    <br>
                    <select name="id_cliente">
                      <option value="1" >Fruna</option>
                      <option value="2">Fruna Osorno</option>
                      <option value="3">MejoreConfites</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="#">Monto</label>
                    <input type="number" class="form-control" name="monto"  placeholder="Escriba el monto">
                  </div>
                  <div class="form-group">
                    <label for="#">Fecha</label>
                    <input type="date" class="form-control" name="fecha" placeholder="Seleccione fecha">
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

       <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Crear cliente</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <form method="post" action="<?php echo site_url('Factura/createCliente')?>">
                  <div class="form-group">
                    <label for="#">ID Cliente</label>
                    <input type="number" class="form-control" name="id_cliente" placeholder="Escriba ID cliente">
                  </div>
                  <div class="form-group">
                    <label for="#">Nombre Cliente</label>
                    <input type="text" class="form-control" name="nombre_cliente"  placeholder="Escriba Nombre cliente">
                  </div>
                  <div class="form-group">
                    <label for="#">Rut</label>
                    <input type="text" class="form-control" name="rut" placeholder="Escriba rut">
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
    <H1>BIENVENIDO JEFE DE FINANZAAAS! </H1>
	</div>
</body>
</html>