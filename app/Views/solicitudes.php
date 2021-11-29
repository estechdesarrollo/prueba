<?=$header?>

<div class="row">
    <div class="col col-mb-8">
        <h3 class="text-center">Solicitudes</h3>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Resumen</th>
                    <th>Nombre Empleado</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $array = json_decode(json_encode($solicitudes),true);
                    foreach ($array as $solicitud) {
                        echo'  <tr>
                                <td>'.$solicitud['id'].'</td>
                                <td>'.$solicitud['codigo'].'</td>
                                <td>'.$solicitud['descripcion'].'</td>
                                <td>'.$solicitud['resumen'].'</td>
                                <td>'.$solicitud['nombre'].'</td>
                            </tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div class="col col-mb-4">
    <div class="container-fluid">
            <div class="card mx-auto mt-5" style="width: 30rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">Ingresar Solicitud</h5>
                    <form method="post" action="<?=base_url('save2') ?>" enctype="multipart/form-data">
                       <div class="form-group">
                           <label for="codigo">Código</label>
                           <input id="codigo" class="form-control" type="text" name="codigo" required>
                       </div>
                       <div class="form-group">
                           <label for="descripcion">Descripción</label>
                           <input id="descripcion" class="form-control" type="text" name="descripcion" required>
                       </div>               
                       <div class="form-group">
                           <label for="resumen">Resumen</label>
                           <input id="resumen" class="form-control" type="text" name="resumen" required>
                       </div>
                       <div class="form-group">
                           <label for="id="id_empleado"">Empleado</label>
                            <select class="form-control form-control" id="id_empleado" name="id_empleado">
                            <option>Seleccione empleado</option>
                            <?php 
                                $array = json_decode(json_encode($empleados),true);
                                        foreach ($array as $empleado) {
                                            echo'
                                                    <option value="'.$empleado['id'].'">'.$empleado['nombre'].'</option>
                                                ';
                                        }
                                    ?>
                                
                            </select>
                        </div>
                       <button class="btn btn-success btn-block" type="submit">Guardar</button>
                    </form>
                </div>
            </div>
            
        </div>        
    </div>
</div>
<?=$footer?>