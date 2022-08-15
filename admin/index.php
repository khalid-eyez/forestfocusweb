<?php  session_start(); ?>
<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.4/form_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 22:25:11 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Forest Focus Admin</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <link href="../css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body>



        <div id="page-wrapper" class="gray-bg" style="width: 100% !important;">
      
           
           

           
        <div class="wrapper wrapper-content animated fadeInRight d-flex justify-content-center" >
      
                    <div class="ibox-content" style="width:36%;margin-top: 15%;">
                    <?php
              
                 if(isset($_SESSION['error']) && $_SESSION['error']!="")
                 {
                 ?>
                    <span class="p-3 text-danger"><?=$_SESSION['error']?></span>
                 <?php
                 
                 }
                 if(isset($_SESSION['message']) && $_SESSION['message']!="")
                 {
                 ?>
                    <span class="p-3 text-primary"><?=$_SESSION['message']?></span>
                 <?php
                 
                 }
                 $_SESSION['message']="";
                 $_SESSION['error']="";
               ?>
                        <div class="container text-center" >
                                <span class="text-lg text-primary text-center p-3 m-3" style="font-size:20px;color:greenyellow">FOREST FOCUS ADMIN</span>
                                <form role="form" method="post" action="login.php" class="mt-3">
                                    <div class="form-group"><input type="email" placeholder="Enter email" name="email" class="form-control" required></div>
                                    <div class="form-group"> <input type="password" placeholder="Password" name="password" class="form-control" required></div>
                                    <div>
                                        <button class="btn btn-sm btn-primary float-right m-t-n-xs" type="submit"><strong><i class="fa fa-sign-in"></i> Log in</strong></button>
                
                                    </div>
                                </form>
                            
                        
                        </div>
                    </div>
                </div>
            </div>
               
           
            
        <div class="footer text-center">
           
                <strong>Copyright</strong> Forest Focus &copy; <?=date('Y')?>
           
        </div>

        </div>
        


    <!-- Mainly scripts -->
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="assets/js/inspinia.js"></script>
    <script src="assets/js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="assets/js/plugins/iCheck/icheck.min.js"></script>
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
