<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>intervention</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
        <link rel="stylesheet" href="<?php echo site_url('resources/fullcallendar/fullcalendar.min.css');?>">
        
    </head>
    
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">intervention</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">intervention</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu" id="header_inbox_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true">
                                <i class="icon-envelope-open"></i>
                                <span class="badge badge-default">  </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3 style="text-align:center;">Notifications</h3>
                                </li>
                                <li>
                                        <ul class="dropdown-menu-list scroller" id="append" >

                                        </ul>
                                </li>
                            </ul>
                        </li>
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="user-image" alt="User Image">
                                    <?php echo $this->session->userdata('logged_in')['first_name']; ?>
                                    <span class="hidden-xs"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">

                                   
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="/intervention/user/edit/<?php echo $this->session->userdata('logged_in')['users_id']; ?>" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo site_url('auth/logout');?>" class="btn btn-default btn-flat">Déconnexion</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                        <?php echo $this->session->userdata('logged_in')['first_name']; ?>
                            <p></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                    <?php if($this->session->userdata('logged_in') ["role"] == 1){ ?>
                    
                        <li class="header">MAIN NAVIGATION</li>
                        <li>
                            <a href="<?php echo site_url();?>">
                                <i class="fa fa-dashboard"></i> <span>Tableau de bord</span>
                            </a>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Société</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('company/add');?>"><i class="fa fa-plus"></i> Ajouter</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('company/index');?>"><i class="fa fa-list-ul"></i>Liste</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Contrat</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('contrat/add');?>"><i class="fa fa-plus"></i> Ajouter</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('contrat/index');?>"><i class="fa fa-list-ul"></i> Liste</a>
                                </li>
							</ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Reclamation </span> 
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('reclamation/add');?>"><i class="fa fa-plus"></i> Ajouter   </a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('reclamation/index');?>"><i class="fa fa-list-ul"></i> Liste</a>
                                </li>
							</ul>
                        </li>
						<li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Intervention</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('intervention/add');?>"><i class="fa fa-plus"></i> Ajouter</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('intervention/index');?>"><i class="fa fa-list-ul"></i> Liste</a>
                                </li>
							</ul>
                        </li>
                        
					
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Utilisateur</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('user/add');?>"><i class="fa fa-plus"></i> Ajouter</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('user/index');?>"><i class="fa fa-list-ul"></i> Liste</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Role</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('role/add');?>"><i class="fa fa-plus"></i> Ajouter</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('role/index');?>"><i class="fa fa-list-ul"></i> Liste</a>
                                </li>
							</ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Calendrier</span>
                            </a>
                            <ul class="treeview-menu">
								<li>
                                    <a href="<?php echo site_url('Calendrier/index');?>"><i class="fa fa-list-ul"></i> Liste</a>
                                </li>
							</ul>
                        </li>
                        <?php } ?>
                        <?php if($this->session->userdata('logged_in') ["role"] == 2){ ?>
                            
                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i>  <span>Intervention </span>
                            </a>
                            <ul class="treeview-menu">
								<li>
                                    <a href="<?php echo site_url('intervention/client_list');?>"><i class="fa fa-list-ul"></i> Liste</a>
                                </li>
							</ul>
                        </li>
                        
						
                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Clients</span>
                            </a>
                            <ul class="treeview-menu">
								<li>
                                    <a href="<?php echo site_url('user/client');?>"><i class="fa fa-list-ul"></i> Liste</a>
                                </li>
							</ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Calendrier</span>
                            </a>
                            <ul class="treeview-menu">
								<li>
                                    <a href="<?php echo site_url('Calendrier/index');?>"><i class="fa fa-list-ul"></i> Liste</a>
                                </li>
							</ul>
                        </li>
                        <?php } ?>
                        <?php if($this->session->userdata('logged_in') ["role"] == 3){ ?>
                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Reclamation </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('reclamation/add');?>"><i class="fa fa-plus"></i> Ajouter</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('reclamation/index_client');?>"><i class="fa fa-list-ul"></i> Liste</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i>  <span>Intervention </span>
                            </a>
                            <ul class="treeview-menu">
								<li>
                                    <a href="<?php echo site_url('intervention/client_list');?>"><i class="fa fa-list-ul"></i> Liste</a>
                                </li>
							</ul>
                        </li>
                        
                        <?php } ?>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <?php if($this->session->userdata('logged_in') ["role"] == 2){ ?>
            <input type="hidden" id="url" value="http://localhost/intervention/intervention/">
            <input type="hidden" id="text_notif" value="Le chef de projet envoyer un intervention">
            <?php } else if($this->session->userdata('logged_in') ["role"] == 3){ ?>
            <input type="hidden" id="text_notif" value="Le chef de projet  a accepter une réclamation">
            <input type="hidden" id="url" value="http://localhost/intervention/reclamation/index_client">
            <?php } else { ?>
            <input type="hidden" id="text_notif" value="Le client a envoyer une réclamation">
            <input type="hidden" id="url" value="http://localhost/intervention/reclamation/">
            <?php } ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
           

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
        <!-- DatePicker -->
        <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
        <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/global.js');?>"></script>
        <script >
        $.get( "/intervention/dashboard/notif", function( data ) {
        $( "#intervention" ).html( data );
        var jsonData = JSON.parse(data);
        var total=jsonData.length;
        $('.badge').html(total);
        var url=$('#url').val();
        var text_notif=$('#text_notif').val();
        for (var i = 0; i < jsonData.length; i++) {
            var counter = jsonData[i].title;    
            $( "#append" ).append( '<li><a href="'+url+'"><span class="time"> '+text_notif+' '+counter+' </span></span><br></a></li>' );
        }
        });
        </script>
        
    </body>
</html>
