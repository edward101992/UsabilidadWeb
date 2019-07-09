<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic Admin Theme #2 | New User Profile | Account</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #2 for user account page" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="../assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout2/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout2/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout2/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>

         <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed page-md">

 <div class=" login">
      <div class="logo">
            <a href="index.html">
                <img src="../assets/pages/img/logo-big.png" alt="" /> </a>
        </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                  <br>
                                <br>
                                
                                <div class="portlet light profile-sidebar-portlet ">
                                    <!-- SIDEBAR USERPIC  LODELAFOTO-->

                                   <div class="container">

                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="fileinput-new thumbnail" style="width: 270px; height: 150px;">
                                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 270px; max-height: 150px;"> </div>
                                                            <div>
                                                                        <span class="btn default btn-file">
                                                                            <span class="fileinput-new"> Seleccionar archivo imagen Usuario</span>
                                                                            <span class="fileinput-exists"> Cambiar </span>
                                                                            <input type="file" name="..."> 
                                                                        </span>
                                                                        
                                                                    </div>      
                                                                </div>
                                                            </div>

                                    <!-- END MENU -->
                                </div>
                                <!-- END PORTLET MAIN -->
                                <!-- PORTLET MAIN -->
                              
                                <!-- END PORTLET MAIN -->
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <br>
                                <br>
                                
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="portlet light ">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">REGISTRO DE USUARIO</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_1" data-toggle="tab">Informacion Personal</a>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <form role="form" action="{{ url('/registroNuevo') }}" method="POST">
                                                            {{ csrf_field() }}
                                                            <div class="form-group">
                                                                <label class="control-label">Nombre :</label>
                                                                <input name="nombre" type="text" placeholder="Ingrese su Nombre" class="form-control" /> </div>
                                                            
                                                            <div class="form-group">
                                                                <label class="control-label">Apellido</label>
                                                                <input name="apellido" type="text" placeholder="Ingrese su Apellido" class="form-control" /> </div>
                                                            
                                                            <div class="form-group">
                                                                <label class="control-label">Celular :</label>
                                                                <input name="telefono" type="text" placeholder="Ingrese su Numero de celular" class="form-control" /> </div>
                                                                
                                                                <label class="control-label">Tipo de Usuario :</label>
                                                        <select name="rolId" class="bs-select form-control input-small" data-style="btn-danger">
                                                            <option value="1">Administrador</option>
                                                            <option value="2" selected>Estudiante</option>
                                                            <option value="3">Evaluador</option>
                                                        </select>
                                                           
                                                            <div class="form-group">
                                                                <label class="control-label">Correo :</label>
                                                                <input name="email" type="email" placeholder="Ingrese su Correo Electronico" class="form-control" /> </div>
                                                            
                                                            <div class="form-group">
                                                                <label class="control-label">Contraseña :</label>
                                                                <input name="password" type="password" placeholder="Ingrese su Contraseña" class="form-control" /> </div>
                                                    <br>
                                                            <div class="margiv-top-10">
                                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                                
                                                                  <input class="btn btn-lg green" type="submit" value="GUARDAR">
                                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                                
                                                               

                                                                 <a class="btn btn-lg red" href="/" role="button">
                                                                   CANCELAR
                                                                 </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PERSONAL INFO TAB -->
                                                    <!-- CHANGE AVATAR TAB -->
                                                   
                                                    <!-- END CHANGE AVATAR TAB -->
                                                    <!-- CHANGE PASSWORD TAB -->
                                                   
                                                    <!-- END CHANGE PASSWORD TAB -->
                                                    <!-- PRIVACY SETTINGS TAB -->
                                                    
                                                    <!-- END PRIVACY SETTINGS TAB -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="../assets/pages/scripts/profile.min.js" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src="../assets/layouts/layout2/scripts/layout.min.js" type="text/javascript"></script>
            <script src="../assets/layouts/layout2/scripts/demo.min.js" type="text/javascript"></script>
            <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
            <script src="../assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
            <!-- END THEME LAYOUT SCRIPTS -->
            <script>
                $(document).ready(function()
                {
                    $('#clickmewow').click(function()
                    {
                        $('#radio1003').attr('checked', 'checked');
                    });
                })
            </script>
    </body>

</html>