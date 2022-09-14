 <?php
    include('db.php');
    include 'header.php';

 ?>



<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="save.php" method="POST">
                    <div class="form-group">
                        <input class="form-control" type="text" name="nombre" placeholder="Nombre" required min="2" />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="descripcion" placeholder="Descripcion" required min="2" />
                        </textarea>
                    </div>
                    <input type="submit" name="enviar" class=" btn btn-success btn-block" value="Enviar" />
                </form>
            </div>
        </div>

        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Creado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
     <?php
        $query = "SELECT * FROM tareas";
        $resultado_tareas = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_array($resultado_tareas)) {
         
     ?>
         <tr>
             <td>
                 <?php echo $row['nombre']; ?>
             </td>
            <td>
                 <?php echo $row['descripcion']; ?>
             </td>
            <td>
                 <?php echo $row['creado']; ?>
             </td>
             <td>
                 <a class="btn btn-success" href="edit.php?id=<?php echo $row['id'] ?>">Editar</a>
                 <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ?>">Eliminar</a>

             </td>
         </tr>
     <?php   
        }
     ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php 
    include 'footer.php';
?>