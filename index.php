<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.4/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 22:36:11 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FOREST FOCUS - HOME</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/slick/slick.css" rel="stylesheet">
    <link href="css/plugins/slick/slick-theme.css" rel="stylesheet">
 
</head>
<body id="page-top" class="landing-page no-skin-config">
  
<?php

 include_once("top.php");
 include_once("carousel.php");

?>



<div class="row justify-content-md-center mb-0" >
                <div class="col-lg-10">
                    <div class="slick_demo_2">
                        <?php
                    include_once("admin/Dbconnect.php");
           $conn=(new Admin\Dbconnect)->connect();
           $sqlt="select * from thematicareas;";
           $resultt=$conn->query($sqlt);
           $areas=$resultt->fetchAll(PDO::FETCH_ASSOC);

           foreach($areas as $area)
           {
            $id=urlencode(base64_encode($area['sectionID']));
            if(strtolower($area['title'])=="solid waste management")
            {
           ?>
                       <a href="projects/view.php?section=<?=$id?>" style="text-decoration:none;color:rgba(0,0,0,.5)">
                        <div >
                            <div class="ibox-content" style="height:130px;overflow:hidden">
                            <p class="text-center">
                                <i class="fa fa-recycle" style="color:rgba(13, 117, 30,.8);font-size:30px"></i>
                                </p>
                                <h3 class="text-center"><?=$area['title']?></h3>
                             
                            </div>
                        </div>
                        </a>

            <?php
            }
            else if(strtolower($area['title'])=="water and sanitation")
            {
                ?>
                    <a href="projects/view.php?section=<?=$id?>" style="text-decoration:none;color:rgba(0,0,0,.5)">
                        <div >
                            <div class="ibox-content" style="height:130px;overflow:hidden">
                            <p class="text-center">
                                <i class="fas fa-water" style="color:rgba(13, 117, 30,.8);font-size:30px"></i>
                                </p>
                                <h3 class="text-center"><?=$area['title']?></h3>
                             
                            </div>
                        </div>
                        </a>


                <?php
            }
            else if(strtolower($area['title'])=="sustainable agroforestry management")
            {
                ?>
                    <a href="projects/view.php?section=<?=$id?>" style="text-decoration:none;color:rgba(0,0,0,.5)">
                        <div >
                            <div class="ibox-content" style="height:130px;overflow:hidden">
                            <p class="text-center">
                                <i class="fa fa-tree" style="color:rgba(13, 117, 30,.8);font-size:30px"></i>
                                </p>
                                <h3 class="text-center"><?=$area['title']?></h3>
                             
                            </div>
                        </div>
                        </a>


                <?php
            }
            else if(strtolower($area['title'])=="poverty reduction, employment and skills acquisition")
            {
                ?>
                    <a href="projects/view.php?section=<?=$id?>" style="text-decoration:none;color:rgba(0,0,0,.5)">
                        <div >
                            <div class="ibox-content" style="height:130px;overflow:hidden">
                            <p class="text-center">
                                <i class="fa fa-money" style="color:rgba(13, 117, 30,.8);font-size:30px"></i>
                                </p>
                                <h3 class="text-center"><?=$area['title']?></h3>
                             
                            </div>
                        </div>
                        </a>


                <?php
            }
            else if(strtolower($area['title'])=="nature restoration and conservation")
            {
                ?>
                    <a href="projects/view.php?section=<?=$id?>" style="text-decoration:none;color:rgba(0,0,0,.5)">
                        <div >
                            <div class="ibox-content" style="height:130px;overflow:hidden">
                            <p class="text-center">
                                <i class="fa fa-leaf" style="color:rgba(13, 117, 30,.8);font-size:30px"></i>
                                </p>
                                <h3 class="text-center"><?=$area['title']?></h3>
                             
                            </div>
                        </div>
                        </a>


                <?php
            }
            else if(strtolower($area['title'])=="education and career development")
            {
                ?>
                    <a href="projects/view.php?section=<?=$id?>" style="text-decoration:none;color:rgba(0,0,0,.5)">
                        <div >
                            <div class="ibox-content" style="height:130px;overflow:hidden">
                            <p class="text-center">
                                <i class="fa fa-graduation-cap" style="color:rgba(13, 117, 30,.8);font-size:30px"></i>
                                </p>
                                <h3 class="text-center"><?=$area['title']?></h3>
                             
                            </div>
                        </div>
                        </a>


                <?php
            }
            else
            {
                ?>
                    <a href="projects/view.php?section=<?=$id?>" style="text-decoration:none;color:rgba(0,0,0,.5)">
                        <div >
                            <div class="ibox-content" style="height:130px;overflow:hidden">
                            <p class="text-center">
                                <i class="fa fa-briefcase" style="color:rgba(13, 117, 30,.8);font-size:30px"></i>
                                </p>
                                <h3 class="text-center"><?=$area['title']?></h3>
                             
                            </div>
                        </div>
                        </a>


                <?php
            }

           }
            ?>
                       
                    </div>
                </div>
                </div>
             


<section id="features" class="container services mt-0" >
<div class="row" >
        <div class="col-lg-12 text-center mb-4" style="margin-top:0px!important">
            <div class="navy-line" style="margin-top:0px!important"></div>
            <h1>Current Projects</h1>
            <p></p>
        </div>
    </div>

    <div class="row">

          <?php
           include_once("admin/Dbconnect.php");
           $conn=(new Admin\Dbconnect)->connect();
           $sql="select * from modules where moduleName='projects';";
           $result=$conn->query($sql);
           $module=$result->fetchAll(PDO::FETCH_ASSOC)[0];
           $moduleID=$module['modID'];

           $sql2="select * from sections where moduleID=".$moduleID." order by sectionID desc limit 3;";
           $result2=$conn->query($sql2);
           $modulesections=$result2->fetchAll(PDO::FETCH_ASSOC);
           //print strlen("Plant to stop poverty is a massive tree planting project that intends to raise and plant eight million trees along North east coast of Tanzania and areas adjacent.");

           foreach($modulesections as $index=>$section)
           {
          
            $text=(strlen($section['description'])<=163)?$section['description']:substr($section['description'],0,162);
            ?>
                 <div class="col-sm-4">
                    <h3><?=ucwords($section['sectionTitle'])?></h3>
                    <p><?=$text?>...</p>
                    <p><a class="navy-link" href="projects/" role="button">Read More &raquo;</a></p>
                    <?php
                  
                         $sql3="select * from sectionimages where sectionID=".$section['sectionID']." order by sectionID desc limit 1;";
                         $result3=$conn->query($sql3);
                         $buffer=$result3->fetchAll(PDO::FETCH_ASSOC);
                         $projimage=(!empty($buffer))?$buffer[0]['image']:"";
                         //$image=(isset())?$result3->fetchAll(PDO::FETCH_ASSOC)[0]:""; 
                      
                    ?>
                    <p><img src="imgs/<?=$projimage?>" class="img-thumbnail" style="width:280px;height:150px"/></p>
                </div>
            <?php
           }

         ?>
       
       
       
   
    </div>
</section>

<section  class="container features">
    <?php
           include_once("admin/Dbconnect.php");
           $conn=(new Admin\Dbconnect)->connect();
           $sqlw="select * from orgprofile order by orgprofID desc limit 1;";
           $resultw=$conn->query($sqlw);
           $profile=$resultw->fetchAll(PDO::FETCH_ASSOC)[0];

    ?>
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h1> With 8 Million trees<br/> <span class="navy"> Planting goal</span> </h1>
            <p class="text-dark">We are driven by a philosophy that for humanity to excel forests of different sorts should well be managed and protected. </p>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-md-6 text-center wow fadeInLeft">
            <div class="card card-body bg-white">
                <i class="fa fa-briefcase features-icon" style="color:rgba(13, 117, 30,.8);"></i>
                <h2>Mission</h2>
                <p><?=$profile['mission']?></p>
            </div>
            <div class="card card-body bg-white mt-2">
                <i class="fa fa-line-chart features-icon" style="color:rgba(13, 117, 30,.8);"></i>
                <h2>Vision</h2>
                <p><?=$profile['vision']?></p>
            </div>
        </div>
      
        <div class="col-md-6 text-center wow fadeInRight">
            <div class="card card-body bg-white">
                <i class="fas fa-brain features-icon" style="color:rgba(13, 117, 30,.8);"></i>
                <h2>Philosophy</h2>
                <p><?=$profile['philosophy']?></p>
            </div>
            <div class="card card-body bg-white mt-2 p-2" style="">
                <i class="fa fa-eye features-icon" style="color:rgba(13, 117, 30,.8);"></i>
                <h2>Target</h2>
                <p><?=$profile['target']?></p>
            </div>
        </div>
        <a href="about/" class="btn btn-primary ml-3 mt-2">Read More <i class="fa fa-arrow-right"></i> </a>
    </div>
  
</section>

<section class="comments" style="margin-top: 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Discover Our Greatest Achievements</h1>
            </div>
        </div>
        <div class="row features-block">
            <?php
           include_once("admin/Dbconnect.php");
           $conn=(new Admin\Dbconnect)->connect();
           $sqla="select * from acheivements order by achieveID desc limit 4;";
           $resulta=$conn->query($sqla);
           $achievements=$resulta->fetchAll(PDO::FETCH_ASSOC);

           foreach($achievements as $index=>$achievement)
           {
            ?>
            <div class="col-sm-3">
                <p><img src="imgs/<?=$achievement['image']?>" class="img-thumbnail" style="width:280px;height:150px"/></p>
                <p><h3 class="ml-1"><?=ucwords($achievement['caption'])?></h3></p>
                
              
            </div>
            <?php
           }
           ?>
        
            

        </div>
    </div>
</section>

<section class="comments gray-section" style="margin-top: 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Recent Activities & Events</h1>
            </div>
        </div>
        <div class="row features-block">
            <div class="col-sm-3">
                <p><img src="imgs/Home (14).jpg" class="img-thumbnail" style="width:280px;height:150px"/></p>
                <h2>TREE GARDENS PREPARATION</h2>
                <p>Plant to stop poverty is a massive tree planting project that intends to raise and plant eight million trees along North east coast of Tanzania and areas adjacent.</p>
                <p><a class="navy-link" href="#" role="button">visit blog &raquo;</a></p>
              
            </div>

            <div class="col-sm-3">
                <p><img src="imgs/Food (2).jpg" class="img-thumbnail" style="width:280px;height:150px"/></p>
                <h2>MUHEZA PEOPLE PARTICIPATING IN PSP PROJECT</h2>
                <p>Plant to stop poverty is a massive tree planting project that intends to raise and plant eight million trees along North east coast of Tanzania and areas adjacent.</p>
                <p><a class="navy-link" href="#" role="button">visit blog &raquo;</a></p>
            </div>

            <div class="col-sm-3">
                <p><img src="imgs/DJI_20220721_135932_803.jpg" class="img-thumbnail" style="width:280px;height:150px"/></p>
                <h2>PSP A POTENTIAL PROJECT IN HANDENI</h2>
                <p>Plant to stop poverty is a massive tree planting project that intends to raise and plant eight million trees along North east coast of Tanzania and areas adjacent.</p>
                <p><a class="navy-link" href="#" role="button">visit blog &raquo;</a></p>
            </div>
            <div class="col-sm-3">
                <p><img src="imgs/Welfair improvement (3).jpg" class="img-thumbnail" style="width:280px;height:150px"/></p>
                <h2>WELFARE IMPROVEMENT PROGRAM IN HANDENI SCHOOLS</h2>
                <p>Plant to stop poverty is a massive tree planting project that intends to raise and plant eight million trees along North east coast of Tanzania and areas adjacent.</p>
                <p><a class="navy-link" href="#" role="button">visit blog &raquo;</a></p>
            </div>
     

            <a href="#" class="btn btn-primary float-right"><i class="fa fa-arrow-right"></i> Blog</a>

        </div>
    </div>
</section>
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
 <!-- slick carousel-->
 <script src="js/plugins/slick/slick.min.js"></script>



<script>

    $(document).ready(function () {

        

      

            $('.slick_demo_2').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 2,
                centerMode: false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('.slick_demo_3').slick({
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                adaptiveHeight: true
            });

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
