<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.4/form_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 22:25:11 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Organisation</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
  
    <?php include_once("sidebar.php"); ?>
    
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
          <?php include_once("topbar.php") ?>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Organisation Information</h2>
                   
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
     
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                           
                            <div class="ibox-tools">
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="get">
         
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">E-mail</label>

                                <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Phone number</label>

                                <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Address</label>

                                <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Facebook</label>

                                <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Instagram</label>

                                <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Youtube</label>

                                <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Twitter</label>

                                <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">LinkedIn</label>

                                <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
                                <div class="form-group  row">

                                <div class="col-sm-2"></div><div class="col-sm-10"><button type="submit"  class="form-control float-right bg-primary" style="float:left"><i class="fa fa-save"></i> Save Changes</button></div>
                                </div>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
  <?php include_once("footer.php") ?>
        </div>
        </div>


    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.4/form_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 22:25:15 GMT -->
</html>
