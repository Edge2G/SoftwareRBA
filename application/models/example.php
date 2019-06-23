    function ingresarData(){
        $query = $this->db->query('SELECT id FROM producto WHERE `nombre`= '.$nombre_producto );
        $id=mssql_query($consulta);
        $data = array(
            'id_tipo_producto' => $this->input->post($id),
            'cantidad'=> $this->input->post('cantidad') ,
            'fecha_ingreso'=> $this->input->post('fecha_ingreso')  
        );
        $this->db->insert('inventario', $data);
    }

          <div class="modal fade" id="ModalIngresar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ingresar Producto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <form method="post" action="<?php echo site_url('producController/ingresar')?>">
                  <div class="form-group">
                    <label for="InputNombre">Nombre Producto</label>
                    <input type="text" class="form-control" name="nombre_producto" placeholder="Escriba aqui el nombre del producto">
                  </div>
                  <div class="form-group">
                    <label for="InputNombre">Cantida de Producto</label>
                    <input type="number" class="form-control" name="cantidad" placeholder="Escriba aqui la cantidad a ingresar">
                  </div>
                  <div class="form-group">
                    <label for="InputNombre">Fecha de producto</label>
                    <input type="date" class="form-control" name="fecha_ingreso" placeholder="Escriba la fecha de ingreso">
                  </div>
                  <button type="submit" class="btn btn-primary" value="save">ingresar</button>
                  </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


      <a class="nav-item nav-link" data-toggle="modal" data-target="ModalCrear" href="#">Crear Producto</a>
      <a class="nav-item nav-link" data-toggle="modal" data-target="ModalIngresar" href="#">Ingresar Producto</a>

<!-- Modal de crear -->
      <div class="modal fade" id="ModalCrear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Crear Producto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <form method="post" action="<?php echo site_url('producController/create')?>">
                  <div class="form-group">
                    <label for="InputNombre">Nombre Producto</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Escriba el nombre del producto">
                  </div>
                  <div class="form-group">
                    <label for="InputTipo">Tipo de Producto</label>
                    <select name="tipo_producto">
                      <option value="materia prima" >Materia Prima</option>
                      <option  value="producto">Producto Terminado</option>
                    </select>
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