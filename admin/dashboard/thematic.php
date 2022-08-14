<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.4/form_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 22:25:11 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Thematic areas</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
  
    <?php 
   

    include_once("../Dbconnect.php");

    $conn=(new Admin\Dbconnect)->connect();
    $sql="select * from sections;";
    $result=$conn->query($sql);
    $sections=$result->fetchAll(PDO::FETCH_ASSOC);
    include_once("sidebar.php");




     ?>
    
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
          <?php include_once("topbar.php") ?>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><i class="fa fa-edit"></i>Thematic Areas</h2>
                   
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                
                        <div class="ibox-content">
                              <?php
                  $sql2="select * from thematicareas;";
                  $result2=$conn->query($sql2);
                  $areas=$result2->fetchAll(PDO::FETCH_ASSOC);
                  //print_r($areas)
                  foreach($areas as $area)
                  {
                    ?>
                       <span class="row p-3 bg-white border"><span class="col"><?=$area['title']?></span> <a href="#" id=<?=$area['taID']?> class="col float-right delthem" ><i class="fa fa-trash"></i></a></span>
                    <?php
                  }
                              ?>
                        </div>
                    </div>
                </div>
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
                                   <form action="thematicsaver.php" method="post" enctype="multipart/form-data">
                                    <input name="title" class="form-control" type="text" placeholder="Text"/><br>
                                    <select name="section" class="form-control" type="text">
                                     <option disabled selected>--Select Section to Link With--</option>
                                     <?php
                                       foreach($sections as $index=>$section)
                                       {
                                        ?>
                                           <option name="section" value=<?=$section['sectionID']?> >
                                           <?=$section['sectionTitle']?>
                                       </option>
                                        <?php
                                       }


                                      ?>
                                    </select>
                                    <br>
                                <div class="form-group  row">
                                <div class="col-sm-12"><button type="submit"  class="form-control  bg-primary" ><i class="fa fa-save"></i> Save Changes</button></div>
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

                $('.delthem').click(function(){

                 var id=$(this).attr('id');
                 var img=$(this);
                 $.post("deletethem.php", {id: id}, function(result){
                        console.log(result);
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
