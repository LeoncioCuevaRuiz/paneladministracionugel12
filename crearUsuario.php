    <?php
        if(isset($_REQUEST['guardar'])){
            include_once "db_ugel.php";
            $con = mysqli_connect($host, $user, $pass, $db);

            $email=mysqli_real_escape_string($con,$_REQUEST['email']??'');
            $pass=md5(mysqli_real_escape_string($con,$_REQUEST['pass']??''));
            $nombre=mysqli_real_escape_string($con,$_REQUEST['nombre']??'');
            $apellido=mysqli_real_escape_string($con,$_REQUEST['apellido']??'');

            $query = "INSERT INTO usuario
            (email,pass,nombre,apellido) VALUES('".$email."','".$pass."','".$nombre."','".$apellido."');
            ";
            $res = mysqli_query($con, $query);
            if($res){
                echo '<meta http-equiv="refresh" content="0; url=panel.php?modulo=usuarios&mensaje=Usuario creado exitosamente"/>';
            }else{
            ?>

            <div class="alert alert-danger" role="alert">
                <strong>Error al crear usuario
                    <?php echo mysqli_error($con);?>
                </strong>
            </div>
            <?php
            }
        }
            ?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear Usuario</h1>
          </div>        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <form action="Panel.php?modulo=crearUsuario" method="post">
                    <div class="form-group">
                        <label >Email</label>
                        <input type="email" name="email" class="form-control" required="required">                        
                    </div>
                    <div class="form-group">
                        <label >Password</label>
                        <input type="password" name="pass" class="form-control" required="required">                        
                    </div>
                    <div class="form-group">
                        <label >Nombre</label>
                        <input type="text" name="nombre" class="form-control" required="required">                        
                    </div>
                    <div class="form-group">
                        <label >Apellido</label>
                        <input type="text" name="apellido" class="form-control" required="required">                        
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>                      
                    </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->