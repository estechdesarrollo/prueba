<?=$header?>
<div class=row>
    <div class="col col-mb-8">
        <h3 class="text-center">Empleados</h3>
        <table class="table table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha Ingreso</th>
                <th>Nombre</th>
                <th>Salario</th>
            </tr>
        </thead>
        <tbody>
            
            <?php 
                foreach ($empleados as $empleado) {
                    
                    echo'  <tr>
                            <td>'.$empleado['id'].'</td>
                            <td>'.$empleado['fecha_ingreso'].'</td>
                            <td>'.$empleado['nombre'].'</td>
                            <td>'.$empleado['salario'].'</td>
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
                    <h5 class="card-title text-center">Ingresar Empleado</h5>
                    <form method="post" action="<?=base_url('save') ?>" enctype="multipart/form-data">
                       <div class="form-group">
                           <label for="nombre">Nombre</label>
                           <input id="nombre" class="form-control" type="text" name="nombre" required>
                       </div>
                       <div class="form-group">
                           <label for="salario">Salario</label>
                           <input id="salario" class="form-control" type="number" name="salario" required>
                       </div>               
                       <div class="form-group">
                           <label for="fecha">Fecha Ingreso</label>
                           <input id="fecha" class="form-control" type="date" name="fecha" required>
                       </div>
                       <button class="btn btn-success btn-block" type="submit">Guardar</button>
                    </form>
                </div>
            </div>
            
        </div>

    </div>
</div>


<?=$footer?>