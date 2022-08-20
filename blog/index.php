<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.4/basic_gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 22:33:43 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blog</title>

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
        $query="select * from blog";
        $result=$conn->query($query);
        $posts=$result->fetchAll(PDO::FETCH_ASSOC);
    ?>
<?php
 include_once("blogcarousel.php");

?>
<div class="wrapper wrapper-content  animated fadeInRight blog">
            <div class="row">
                <?php
                  foreach($posts as $index=>$post)
                  {
                    ?>
                    <div class="col-lg-4">
                    <div class="ibox">
                        <div class="ibox-content">
                            <a href="article.html" class="btn-link">
                                <h2>
                                    <?=htmlspecialchars(stripslashes($post['title']))?>
                                </h2>
                            </a>
                            <div class="small m-b-xs">
                               <span class="text-muted"><i class="fa fa-clock-o"></i> <?=date_format(date_create($post['time']),"d-m-Y H:i:s")?></span>
                            </div>
                            <p>
                                <?=htmlspecialchars(stripslashes($post['intro']))?>
                            </p>
                            <div class="row">
                                <div class="col-sm-12">
                                    <img src="../imgs/<?=$post['image']?>" style="width:100%;height:90%"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                      
                                        <a href="../viewpost.php?post=<?=urlencode(base64_encode($post['blogID']))?>" class="text-white btn btn-info btn-xs">View Post <i class="fa fa-arrow-right"></i></a>
                                  
                                </div>
                                <div class="col-md-6">
                                    <div class="small text-right">
                                         <?php
                                            $query4="select * from blogcomments where blogID=".$post['blogID'].";";
                                            $result4=$conn->query($query4);
                                            $comments=$result4->fetchAll();
                                         ?>
                                        <div> <i class="fa fa-comments-o"> </i> <?=count($comments) ?> comments </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
                    <?php
                  }
                ?>
           
</div></div>

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
