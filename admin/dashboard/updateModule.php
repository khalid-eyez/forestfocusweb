<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.4/form_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 22:25:11 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>update section</title>

    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="../../css/animate.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">

    <link href="../../css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
  
    <?php 
    //session_start();
    $_SESSION['module']=$_GET['module'];
 
    $module=base64_decode(urldecode($_GET['module']));
    //finding section images

    include_once("../Dbconnect.php");

    $conn=(new Admin\Dbconnect)->connect();
    $sql="select * from modules where modID=".$module.";";
    $result=$conn->query($sql);
    $image=$result->fetchAll(PDO::FETCH_ASSOC)[0];
    include_once("sidebar.php");




     ?>
    
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
          <?php include_once("topbar.php") ?>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><i class="fa fa-edit"></i> Update Section</h2>
                   
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
     
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                             Module Background
                            <div class="ibox-tools">
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                        <form action="updatemod.php?module=<?=$_GET['module']?>" method="post" enctype="multipart/form-data">
                              <div class="row">
                    
                                    
                              
                                   <div class="col-sm-12">
                                   <img src="../../imgs/<?=$image['moduleimage']?>" class="img-thumbnail" style="max-height:450px;width:100%">
                                     
                                  </img>
                                  
                                   </div>
                                   </div>
                                    <input name="images[]" class="form-control" type="file"  accept="image/*" /><br>
                               
                                <div class="form-group  row">
                                <div class="col-sm-12"><button type="submit"  class="form-control  bg-primary" ><i class="fa fa-save"></i> Save Changes</button></div>
                                </div>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="footer text-center">
           
           <strong>Copyright</strong> Forest Focus &copy; <?=date('Y')?>
      
   </div>
        </div>
        </div>


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

                $('.delimg').click(function(){

                 var id=$(this).attr('id');
                 var img=$(this);
                 $.post("deletesectionimg.php", {id: id}, function(result){
                        
                       if(result=='true')
                       {
                          img.parent().remove();
                       }
                    });



                })
            });
        </script>
</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.4/form_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 22:25:15 GMT -->
</html>
