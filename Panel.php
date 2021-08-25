<!DOCTYPE html>
<html lang="en">
      <?php
        session_start();
        session_regenerate_id(true);
        if(isset($_REQUEST['sesion']) && $_REQUEST['sesion']=="cerrar"){
          session_destroy();
          header("location: index.php");
        }

        if( isset($_SESSION['Id'])==false ){
          header("location: index.php");
        }

        $modulo=$_REQUEST['modulo']??'';
      ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ugel12</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables 
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
  <link rel="stylesheet" href="css/editor.dataTables.min.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <a class="nav-link" href="Panel.php?modulo=editarUsuario&Id=<?php echo $_SESSION['Id']; ?>">
          <i class="far fa-user"></i>  
        </a>
      <a class="nav-link text-danger" href="Panel.php?modulo=&sesion=cerrar" title="Cerrar Sesion">
          <i class="fas fa-door-closed"></i>  
        </a>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Ugel12</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['nombre'];?></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-sign-in-alt nav-icon" aria-hidden="true"></i>              
              <p>
                Login              
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="panel.php?modulo=usuarios" class="nav-link <?php echo($modulo=="usuarios" || $modulo=="crearUsuario" || $modulo=="editarUsuario")?"active":"";?> ">
                  <i class="far fa-user nav-icon" aria-hidden="true"></i>
                  <p>Usuarios</p>
                </a>
              </li>
        </ul>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-home nav-icon" aria-hidden="true"></i>              
              <p>
                Pagina Principal              
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="panel.php?modulo=noticias" class="nav-link <?php echo($modulo=="noticias")?"active":"";;?> ">
                  <i class="fas fa-newspaper nav-icon" aria-hidden="true"></i>
                  <p>Noticias</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="panel.php?modulo=convocatorias" class="nav-link <?php echo($modulo=="convocatorias")?"active":"";;?> ">
                  <i class="fas fa-newspaper nav-icon" aria-hidden="true"></i>
                  <p>Convocatorias</p>
                </a>
              </li>
        </ul>
              </li>
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-home nav-icon" aria-hidden="true"></i>              
              <p>
                Ugel12             
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="panel.php?modulo=sobrenosotros" class="nav-link <?php echo($modulo=="sobrenosotros")?"active":"";;?> ">
                  <i class="fas fa-newspaper nav-icon" aria-hidden="true"></i>
                  <p>Mision</p>
                </a>
              </li>
        </ul>
        <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="panel.php?modulo=vision" class="nav-link <?php echo($modulo=="vision")?"active":"";;?> ">
                  <i class="fas fa-newspaper nav-icon" aria-hidden="true"></i>
                  <p>Vision</p>
                </a>
              </li>
        </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="panel.php?modulo=organigrama" class="nav-link <?php echo($modulo=="organigrama")?"active":"";;?> ">
                  <i class="fas fa-newspaper nav-icon" aria-hidden="true"></i>
                  <p>Organigrama</p>
                </a>
              </li>
        </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="panel.php?modulo=institucioneseducativas" class="nav-link <?php echo($modulo=="institucioneseducativas")?"active":"";;?> ">
                  <i class="fas fa-newspaper nav-icon" aria-hidden="true"></i>
                  <p>Instituciones educativas</p>
                </a>
              </li>
        </ul>
        <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="panel.php?modulo=directivos" class="nav-link <?php echo($modulo=="directivos")?"active":"";;?> ">
                  <i class="fas fa-newspaper nav-icon" aria-hidden="true"></i>
                  <p>Directivos</p>
                </a>
              </li>
        </ul>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
        <?php
        if(isset($_REQUEST['mensaje'])){
          ?>
          <div class="alert alert-primary alert-dismissible fade show float-right" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">close</span>
            </button>
            <?php echo $_REQUEST['mensaje'] ?>
          </div>
          <?php
        }
        if($modulo=="usuarios"){
          include_once "usuarios.php";
        }
        if($modulo=="crearUsuario"){
          include_once "crearUsuario.php";
        }
        if($modulo=="editarUsuario"){
          include_once "editarUsuario.php";
        }
        if($modulo=="noticias"){
          include_once "noticias.php";
        }
        if($modulo=="sobrenosotros"){
          include_once "sobrenosotros.php";
        }
        if($modulo=="vision"){
          include_once "vision.php";
        }
        if($modulo=="organigrama"){
          include_once "organigrama.php";
        }
        if($modulo=="institucioneseducativas"){
          include_once "institucioneseducativas.php";
        }
        if($modulo=="directivos"){
          include_once "directivos.php";
        } 
        if($modulo=="convocatorias"){
          include_once "convocatorias.php";
        }      
        ?>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>-->
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script src="js/dataTables.editor.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

    /* Noticias */
    editor = new $.fn.dataTable.Editor( {
        ajax: "controllers/noticias.php",
        table: "#tablaNoticias",
        fields: [ {
                label: "titulo:",
                name: "titulo"
            }, {
                label: "descripcion:",
                name: "descripcion"
            }, {
                label: "Imagenes:",
                name: "files[].id",
                type: "uploadMany",
                display: function ( fileId, counter ) {
                    return '<img src="'+editor.file( 'files', fileId ).web_path+'"/>';
                },
                noFileText: 'No hay imagenes'
            }
        ]
    } );

    $('#tablaNoticias').DataTable( {
        dom: "Bfrtip",
        ajax: "controllers/noticias.php",
        columns: [
            { data: "titulo" },
            { data: "descripcion" },
            {
                data: "files",
                render: function ( d ) {
                    return d.length ?
                        d.length+' imagenes' :
                        'No hay imagenes';
                },
                title: "Imagen"
            }
        ],
        select: true,
        buttons: [
            { extend: "create", editor: editor },
            { extend: "edit",   editor: editor },
            { extend: "remove", editor: editor }
        ]
    } );

    /* Mision */ 
    editor = new $.fn.dataTable.Editor( {
        ajax: "controllers/sobrenosotros.php",
        table: "#tablaSobreNosotros",
        fields: [ {
                label: "titulo:",
                name: "titulo"
            }, {
                label: "descripcion:",
                name: "descripcion"
            }, {
                label: "Imagenes:",
                name: "files[].id",
                type: "uploadMany",
                display: function ( fileId, counter ) {
                    return '<img src="'+editor.file( 'files', fileId ).web_path+'"/>';
                },
                noFileText: 'No hay imagenes'
            }
        ]
    } );

    $('#tablaSobreNosotros').DataTable( {
        dom: "Bfrtip",
        ajax: "controllers/sobrenosotros.php",
        columns: [
            { data: "titulo" },
            { data: "descripcion" },
            {
                data: "files",
                render: function ( d ) {
                    return d.length ?
                        d.length+' imagenes' :
                        'No hay imagenes';
                },
                title: "Imagen"
            }
        ],
        select: true,
        buttons: [
            { extend: "create", editor: editor },
            { extend: "edit",   editor: editor },
            { extend: "remove", editor: editor }
        ]
    } );

    /* Vision */ 
    editor = new $.fn.dataTable.Editor( {
        ajax: "controllers/vision.php",
        table: "#tablaVision",
        fields: [ {
                label: "titulo:",
                name: "titulo"
            }, {
                label: "descripcion:",
                name: "descripcion"
            }, {
                label: "Imagenes:",
                name: "files[].id",
                type: "uploadMany",
                display: function ( fileId, counter ) {
                    return '<img src="'+editor.file( 'files', fileId ).web_path+'"/>';
                },
                noFileText: 'No hay imagenes'
            }
        ]
    } );

    $('#tablaVision').DataTable( {
        dom: "Bfrtip",
        ajax: "controllers/vision.php",
        columns: [
            { data: "titulo" },
            { data: "descripcion" },
            {
                data: "files",
                render: function ( d ) {
                    return d.length ?
                        d.length+' imagenes' :
                        'No hay imagenes';
                },
                title: "Imagen"
            }
        ],
        select: true,
        buttons: [
            { extend: "create", editor: editor },
            { extend: "edit",   editor: editor },
            { extend: "remove", editor: editor }
        ]
    } );

    /* organigrama */
    editor = new $.fn.dataTable.Editor( {
        ajax: "controllers/organigrama.php",
        table: "#tablaOrganigrama",
        fields: [ {
                label: "titulo:",
                name: "titulo"
            }, {
                label: "descripcion:",
                name: "descripcion"
            }, {
                label: "Imagenes:",
                name: "files[].id",
                type: "uploadMany",
                display: function ( fileId, counter ) {
                    return '<img src="'+editor.file( 'files', fileId ).web_path+'"/>';
                },
                noFileText: 'No hay imagenes'
            }
        ]
    } );

    $('#tablaOrganigrama').DataTable( {
        dom: "Bfrtip",
        ajax: "controllers/organigrama.php",
        columns: [
            { data: "titulo" },
            { data: "descripcion" },
            {
                data: "files",
                render: function ( d ) {
                    return d.length ?
                        d.length+' imagenes' :
                        'No hay imagenes';
                },
                title: "Imagen"
            }
        ],
        select: true,
        buttons: [
            { extend: "create", editor: editor },
            { extend: "edit",   editor: editor },
            { extend: "remove", editor: editor }
        ]
    } ); 
    
    /* instituciones educativas */
    editor = new $.fn.dataTable.Editor( {
        ajax: "controllers/institucioneseducativas.php",
        table: "#tablainstitucionesEducativas",
        fields: [ {
                label: "titulo:",
                name: "titulo"
            }, {
                label: "descripcion:",
                name: "descripcion"
            }, {
                label: "Imagenes:",
                name: "files[].id",
                type: "uploadMany",
                display: function ( fileId, counter ) {
                    return '<img src="'+editor.file( 'files', fileId ).web_path+'"/>';
                },
                noFileText: 'No hay imagenes'
            }
        ]
    } );

    $('#tablainstitucionesEducativas').DataTable( {
        dom: "Bfrtip",
        ajax: "controllers/institucioneseducativas.php",
        columns: [
            { data: "titulo" },
            { data: "descripcion" },
            {
                data: "files",
                render: function ( d ) {
                    return d.length ?
                        d.length+' imagenes' :
                        'No hay imagenes';
                },
                title: "Imagen"
            }
        ],
        select: true,
        buttons: [
            { extend: "create", editor: editor },
            { extend: "edit",   editor: editor },
            { extend: "remove", editor: editor }
        ]
    } ); 

    /* directivos */
    editor = new $.fn.dataTable.Editor( {
        ajax: "controllers/directivos.php",
        table: "#tablaDirectivos",
        fields: [ {
                label: "titulo:",
                name: "titulo"
            }, {
                label: "descripcion:",
                name: "descripcion"
            }, {
                label: "Imagenes:",
                name: "files[].id",
                type: "uploadMany",
                display: function ( fileId, counter ) {
                    return '<img src="'+editor.file( 'files', fileId ).web_path+'"/>';
                },
                noFileText: 'No hay imagenes'
            }
        ]
    } );

    $('#tablaDirectivos').DataTable( {
        dom: "Bfrtip",
        ajax: "controllers/directivos.php",
        columns: [
            { data: "titulo" },
            { data: "descripcion" },
            {
                data: "files",
                render: function ( d ) {
                    return d.length ?
                        d.length+' imagenes' :
                        'No hay imagenes';
                },
                title: "Imagen"
            }
        ],
        select: true,
        buttons: [
            { extend: "create", editor: editor },
            { extend: "edit",   editor: editor },
            { extend: "remove", editor: editor }
        ]
    } ); 

    /* Convocatoria */
    editor = new $.fn.dataTable.Editor( {
        ajax: "controllers/convocatorias.php",
        table: "#tablaconvocatoria",
        fields: [ {
                label: "titulo:",
                name: "titulo"
            }, {
                label: "descripcion:",
                name: "descripcion"
            }, {
                label: "Imagenes:",
                name: "files[].id",
                type: "uploadMany",
                display: function ( fileId, counter ) {
                    return '<img src="'+editor.file( 'files', fileId ).web_path+'"/>';
                },
                noFileText: 'No hay imagenes'
            }
        ]
    } );

    $('#tablaconvocatoria').DataTable( {
        dom: "Bfrtip",
        ajax: "controllers/convocatorias.php",
        columns: [
            { data: "titulo" },
            { data: "descripcion" },
            {
                data: "files",
                render: function ( d ) {
                    return d.length ?
                        d.length+' imagenes' :
                        'No hay imagenes';
                },
                title: "Imagen"
            }
        ],
        select: true,
        buttons: [
            { extend: "create", editor: editor },
            { extend: "edit",   editor: editor },
            { extend: "remove", editor: editor }
        ]
    } ); 
  });
</script>

<script>
  $(document).ready(function(){
      $(".borrar").click(function (e){
        e.preventDefault();
        var res=confirm("Realmente te quieres cargar(borrar) ese usuario?");
        if(res==true){
          var link=$(this).attr("href");
          window.location=link;
        }
      });
  });
</script>
</body>
</html>
