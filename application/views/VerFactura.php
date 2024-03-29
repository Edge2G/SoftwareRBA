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
      
      <li class="nav-item ">
        <a class="nav-link" href="#">Ver Facturas </a>
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
  <table class="table">
        <thead>
          <tr>
          <th scope="col">id</th>
          <th scope="col">Numero factura</th>
          <th scope="col">Id cliente</th>
          <th scope="col">Monto</th>
          <th scope="col">Fecha</th>
          <th scope="col">Accion</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($result as $row) {?>
          <tr>
          <th scope="row"> <?php echo $row->id; ?></th>
          <td><?php echo $row->numero_factura; ?></td>
          <td><?php echo $row->id_cliente; ?></td>
          <td><?php echo $row->monto; ?></td>
          <td><?php echo $row->fecha; ?></td>
          <td> <a href="<?php echo site_url('Factura/edit');?>/<?php echo $row->id;?>"> Editar </a> | 
               <a href="<?php echo site_url('Factura/delete');?>/<?php echo $row->id;?>">Eliminar</a> |
               <a href="<?php echo site_url('Factura/detalle');?>/<?php echo $row->id;?>">Detalle</a></td>
          <?php } ?>
       </tbody>
    </table>
</body>
</html>