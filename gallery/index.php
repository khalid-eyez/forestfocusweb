<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.4/basic_gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 22:33:43 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gallery</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

</head>

<body id="page-top" class="landing-page no-skin-config">
    <?php include_once("../top.php");
        include_once("../admin/Dbconnect.php");
        $conn=(new Admin\Dbconnect)->connect();
        $query="select * from gallery";
        $result=$conn->query($query);
        $images=$result->fetchAll(PDO::FETCH_ASSOC);
    ?>
   <?php

include_once("gallerycarousel.php");

   ?>
<div class="lightBoxGallery mt-4">
                        <?php

                          foreach($images as $index=>$image)
                          {
                            ?>
                            <a href="../imgs/<?=$image['image']?>" title="" data-gallery="" ><img src="../imgs/<?=$image['image']?>" style="width:270px; height:150px"></a>
                           
                          
                            <?php
                          }

                        ?>
                    
                           

                            
                          
                          
                         
                            <div id="blueimp-gallery" class="blueimp-gallery">
                                <div class="slides"></div>
                                <h3 class="title"></h3>
                                <a class="prev">‹</a>
                                <a class="next">›</a>
                                <a class="close">×</a>
                                <a class="play-pause"></a>
                                <ol class="indicator"></ol>
                            </div>

                 

                        </div>

                       <?php include_once("../footer.php") ?>
         
  




    <!-- Mainly scripts -->
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../js/inspinia.js"></script>
    <script src="../js/plugins/pace/pace.min.js"></script>

    <!-- blueimp gallery -->
    <script src="../js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.4/basic_gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 22:35:37 GMT -->
</html>
