<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.4/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 22:36:11 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Post</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
 
</head>
<body id="page-top" class="landing-page no-skin-config">
  
  <?php include_once("top.php"); 
  
  include_once("admin/Dbconnect.php");
  $post=base64_decode(urldecode($_GET['post']));

  $conn=(new Admin\Dbconnect)->connect();
  $query="select * from blog where blogID=".$post.";";
  $result=$conn->query($query);
  $postdata=$result->fetchAll(PDO::FETCH_ASSOC)[0];
  
  //finding sections
  $query2="select * from blogsections where blogID=".$post.";";
  $result2=$conn->query($query2);
  $sections=$result2->fetchAll(PDO::FETCH_ASSOC);
  
  ?>
 
<div id="inSlider" class="carousel slide" data-ride="carousel" style="margin-top:146px" >

    <div class="carousel-inner" role="listbox">
   
        <div class="carousel-item active">
            <div class="container">
                <div class="carousel-caption">
                    <h1>
                      <?=htmlspecialchars(stripslashes($postdata['title']))?>
                    </h1>
                </div>
            </div>
            <!-- Set background for slide in css -->
         
            <div class="header-back one" style="background: url('imgs/<?=$postdata["image"]?>'),linear-gradient(rgba(0,0,0,0.3),rgba(50,100,0,0.2)) 50% 0 no-repeat;background-size:cover; background-blend-mode: overlay;"></div>

        </div>
    
    
    </div>

</div>


<div id="" class="gray-bg "> 
 <div class="wrapper wrapper-content animated fadeInRight d-flex justify-content-center">
 <div class="container">
 <div class="row" >
         <div class="col-lg-12">
             <div class="ibox">
               
                 <div class="ibox-content">
               
  
                      <h3><?=htmlspecialchars(stripslashes($postdata['intro']))?></h3>
                     
                  
                 </div>
             </div>
         </div>
     </div>

    
     
     <?php
       foreach($sections as $index=>$section)
       {
        ?>
           <div class="row" >
         <div class="col-lg-12">
             <div class="ibox">
              
                 <div class="ibox-content">
                 <h1 class="text-bold text-lg"><?=htmlspecialchars(stripslashes($section['subtitle']))?></h1>
                 <?=htmlspecialchars(stripslashes($section['description']))?>
                 <div class="row">
                   <?php
                       $query3="select * from blogsectionimages where sectionID=".$section['sectionID'].";";
                       $result3=$conn->query($query3);
                       $images=$result3->fetchAll(PDO::FETCH_ASSOC);


                       foreach($images as $index=>$image)
                       {
                        ?>
                        <div class="col-sm-3">
                        <img src="imgs/<?=$image['image']?>" class="img-thumbnail" style="max-height:145px;width:100%" ></img>
                        </div>
                        <?php
                       }
                   ?>


                 </div>
                  
                 </div>
             </div>
         </div>
     </div>

        <?php
       }

     ?>
     <div class="row mb-3">
                <div class="col-lg-12">
             
                      
                        <div class="ibox-content forum-post-container">
                            <div class="forum-post-info">
                                <h3><span class="text-navy"><i class="fa fa-comments"></i> Comments</h3>
                            </div>
                            <?php
                         $query4="select * from blogcomments where blogID=".$post.";";
                         $result4=$conn->query($query4);
                         $comments=$result4->fetchAll(PDO::FETCH_ASSOC);
                         foreach($comments as $index=>$comment)
                         {
                            ?>
                            
                            <div class="media">
                                <a class="forum-avatar" href="#">
                                    <img src="imgs/nouser.png" class="rounded-circle" alt="image">
                                    <div class="author-info">
                                    <?=htmlspecialchars(stripslashes($comment['fullname']))?><br/>
                                    <?=htmlspecialchars(stripslashes($comment['email']))?>
                                    </div>
                                </a>
                                <div class="media-body">
                                <?=htmlspecialchars(stripslashes($comment['comment']))?><br><br>
                                <small class="float-right"><?=date_format(date_create($comment['time']),"d-m-Y H:i:s")?></small>
                               
                                </div>
                            </div>
                              

                            <?php
                         }
                   ?>
                 </div>
    </div>
         </div>
  
<div class="row" >
         <div class="col-lg-12">
             <div class="ibox">
    
                 <div class="ibox-content">
                 <h3 class="mb-4"><span class="text-navy"><i class="fa fa-comments"></i> Share Your Comment</span></h3>
                 <form action="commentpost.php?post=<?=$_GET['post']?>" method="post" enctype="multipart/form-data">
  
                         <div class="form-group  row"><label class="col-sm-2 col-form-label">Full Name</label>

                         <div class="col-sm-10"><input type="text" name="fullname" value="" class="form-control" required></div>
                         </div>
                         <div class="form-group  row"><label class="col-sm-2 col-form-label">E-mail</label>

                        <div class="col-sm-10"><input type="email" name="email" value="" class="form-control" required></div>
                        </div>
                         <div class="form-group  row"><label class="col-sm-2 col-form-label">Comment</label>

                         <div class="col-sm-10"><textarea name="comment" value="" class="form-control" rows=8 required></textarea></div>
                         </div>
                         <div class="form-group  row">
                                <div class="col-sm-12"><button type="submit"  class="form-control  bg-primary" ><i class="fa fa-paper-plane"></i> Submit</button></div>
                                </div>
                     
                  
                 </div>
             </div>
         </div>
     </div>
     
</div>
</div>
</div>
<?php include_once("footer.php"); ?>
<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="js/plugins/wow/wow.min.js"></script>


<script>

    $(document).ready(function () {

        $('body').scrollspy({
            target: '#navbar',
            offset: 80
        });

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });
    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
                header = document.querySelector( '.navbar-default' ),
                didScroll = false,
                changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();

    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

</script>

</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.4/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 22:37:27 GMT -->
</html>
