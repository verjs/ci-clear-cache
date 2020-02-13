<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $this->config->item('app_name'); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>bootstrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

     <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>css/custom-style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

     <div class="modal fade" id="enlargeImageModal" tabindex="-1" role="dialog" aria-labelledby="enlargeImageModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
          <img src="" class="enlargeImageModalSource" style="width: 100%;">
        </div>
      </div>
    </div>
</div>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><?php echo $this->config->item('app_name'); ?></a>
            </div>
            <!-- /.navbar-header -->

            <?php $this->load->view('navigation-top'); ?>
            <?php $this->load->view('sidebar'); ?>  

        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">               
                <div class="col-lg-12">
                    <h1 class="page-header">Cache Files</h1>
                </div>                
                <!-- /.col-lg-12 -->
            </div>
            <?php echo $this->session->flashdata('flashMsg'); ?>
            <!-- /.row --> 
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>File (./system/cache/)</th>
                            <th>Size</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if($cache_folder) {
                        foreach($cache_folder as $file) {
                            if (pathinfo($file, PATHINFO_EXTENSION) === 'rec') {
                                ?>
                                <tr>
                                    <td><?php echo $file; ?></td>
                                    <td><?php echo filesize($folder.$file); ?> bytes</td>
                                </tr> 
                                <?php
                            }                            
                        }
                    }
                    ?>                                                       
                    </tbody>
                </table>
            </div>

        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Clear Cache?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">This will remove all *.rec files inside ./system/cache/ folder.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo site_url(); ?>/admin/clear-cache">Proceed</a>
        </div>
      </div>
    </div>
  </div>

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <!-- <script src="<?php echo base_url(); ?>bootstrap/vendor/metisMenu/metisMenu.min.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <!-- <script src="<?php echo base_url(); ?>bootstrap/dist/js/sb-admin-2.js"></script> -->


</body>

</html>
