<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.4/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 22:36:11 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FOREST FOCUS - PROJECTS</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
 
</head>
<body id="page-top" class="landing-page no-skin-config">
  
  <?php include_once("../top.php"); 
  
  include_once("../admin/Dbconnect.php");
  $conn=(new Admin\Dbconnect)->connect();
  $section=base64_decode(urldecode($_GET['section']));

  //finding sections
  $query2="select * from sections where sectionID=".$section.";";
  $result2=$conn->query($query2);
  $sections=$result2->fetchAll(PDO::FETCH_ASSOC);
  if(empty($sections)){header("location:../index.php");}
  //print_r($sections);return true;
  ?>
<div id="inSlider" class="carousel slide" data-ride="carousel" style="margin-top:146px" >

    <div class="carousel-inner" role="listbox">
   
        <div class="carousel-item active">
            <div class="container">
                <div class="carousel-caption">
                    <h1>
                      <?=$sections[0]['sectionTitle']?>
                    </h1>
                </div>
            </div>
            <!-- Set background for slide in css -->
         
            <div class="header-back one" style="background: url('../imgs/sectionview.jpg?>'),linear-gradient(rgba(0,0,0,0.3),rgba(50,100,0,0.2)) 50% 0 no-repeat;background-size:cover; background-blend-mode: overlay;"></div>

        </div>
    
    
    </div>

</div>


<?php

foreach($sections as $index=>$section)
{

    ?>
       <section  class="container features">
    <div class="row mt-3">
        <div class="col-lg-12 text-center">
            <h1>
                <?=$section['sectionTitle']?>
            </h1>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12  text-lg    text-justify mt-3" style="column-count:2;font-size: 15px; text-justify: auto;">

                 <?=$section['description']?>
       
        </div>
    </div>
    <div class="row mt-1">
        <?php
          //section images

          $query3="select * from sectionimages where sectionID=".$section['sectionID'].";";
          $result3=$conn->query($query3);
          $sectionsimages=$result3->fetchAll(PDO::FETCH_ASSOC);


          foreach($sectionsimages as $index=>$sectionsimage)
          {
            ?>

                <div class="col-sm-4  wow zoomIn">
                    
                    <img src="../imgs/<?=$sectionsimage['image']?>" alt="forest focus" style="height:175px;width:400px" class="img-fluid img-thumbnail">
                </div>
            <?php
          }

        ?>
   
 
    </div>
  
</section>



    <?php
}

?>

<?php include_once("../footer.php"); ?>



<!-- Mainly scripts -->
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="../js/inspinia.js"></script>
<script src="../js/plugins/pace/pace.min.js"></script>
<script src="../js/plugins/wow/wow.min.js"></script>


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
