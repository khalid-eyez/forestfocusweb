<?php 
include_once("islogged.php"); 
ini_set('post_max_size', '250M');
ini_set('upload_max_filesize', '50M');
?>

<nav class="navbar-default navbar-static-side"  role="navigation">
        <div class="sidebar-collapse" >
            <ul class="nav metismenu" id="side-menu" >
                <li class="nav-header" >
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="../../logo/logo.png" with="100px" height="100px"/>
                   
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
        
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </div>
               
                </li>
        
        
            
                <li class="">
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Organisation</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li class="active"><a href="organisation.php">Organisation Details</a></li>
                       
                    </ul>
                </li>
                <li class="">
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Carousel</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li class=""><a href="carousel.php">View | Upload Images</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Home</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li class=""><a href="thematic.php">Thematic Areas</a></li>
                        <li class=""><a href="updateprofil.php">organisation Profile</a></li>
                        <li class=""><a href="achievements.php">achievements</a></li>
                    </ul>
                </li>


                <li class="">
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Philosophy</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                  
                          <?php
                          include_once("../Dbconnect.php");
                          $conn=(new Admin\Dbconnect)->connect();
                          $query="select modID from modules where moduleName='philosophy-activities';";
                          $result=$conn->query($query);
                          $module=$result->fetchAll(PDO::FETCH_ASSOC);
                          $moduleID=urldecode(base64_encode($module[0]['modID']));
                         // print $module[0]['modID'];
                          $query2="select * from sections where moduleID=".$module[0]['modID'].";";
            
                          $result2=$conn->query($query2);
                          $sections=$result2->fetchAll(PDO::FETCH_ASSOC);
                          ?>
                            <li><a href="updateModule.php?module=<?=$moduleID?>">Module Carousel</a></li>
                          <?php
                         foreach($sections as $index=>$section)
                         {
                            $title=$section['sectionTitle'];
                            $sendsection=urlencode(base64_encode(serialize($section)));
                            //$sectionID=urlencode(base64_encode($section['sectionID']));
                            ?>
                              <li><a href="updatesection.php?section=<?=$sendsection?>&&module=<?=$moduleID?>"><?=$title?></a></li>
                            <?php
                         }
                          //select all existing sections
                             //$conn=mysqli_connect()
                          ?>
                        <!--<li class="active"><a href="form_basic.html">Home</a></li>-->
                        <li><a href="newsection.php?module=<?=$moduleID?>">New Section</a></li>
                      
                    </ul>
                </li>

                <li class="">
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Projects</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                  
                          <?php
                          $queryproj="select modID from modules where moduleName='projects';";
                          $resultproj=$conn->query($queryproj);
                          $moduleproj=$resultproj->fetchAll(PDO::FETCH_ASSOC);
                          $moduleID2=urldecode(base64_encode($moduleproj[0]['modID']));
                          //print $moduleproj[0]['modID'];
                          $query3="select * from sections where moduleID=".$moduleproj[0]['modID'].";";
            
                          $result3=$conn->query($query3);
                          $sectionsproj=$result3->fetchAll(PDO::FETCH_ASSOC);
                          
                          ?>
                            <li><a href="updateModule.php?module=<?=$moduleID2?>">Module Carousel</a></li>
                          <?php
                         foreach($sectionsproj as $index=>$section2)
                         {
                            $title=$section2['sectionTitle'];
                            $sendsection2=urlencode(base64_encode(serialize($section2)));
                            //$sectionID=urlencode(base64_encode($section['sectionID']));
                            ?>
                              <li><a href="updatesection.php?section=<?=$sendsection2?>&&module=<?=$moduleID2?>"><?=$title?></a></li>
                            <?php
                         }
                          //select all existing sections
                             //$conn=mysqli_connect()
                          ?>
                        <!--<li class="active"><a href="form_basic.html">Home</a></li>-->
                        <li><a href="newsection.php?module=<?=$moduleID2?>">New Section</a></li>
                      
                    </ul>
                </li>


                <li class="">
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">About</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                  
                          <?php
                          include_once("../Dbconnect.php");
                          $conn=(new Admin\Dbconnect)->connect();
                          $query="select modID from modules where moduleName='about';";
                          $result=$conn->query($query);
                          $module=$result->fetchAll(PDO::FETCH_ASSOC);
                          $moduleID=urldecode(base64_encode($module[0]['modID']));
                          //print $module[0]['modID'];
                          $query2="select * from sections where moduleID=".$module[0]['modID'].";";
            
                          $result2=$conn->query($query2);
                          $sections=$result2->fetchAll(PDO::FETCH_ASSOC);
                          ?>
                            <li><a href="updateModule.php?module=<?=$moduleID?>">Module Carousel</a></li>
                          <?php
                         foreach($sections as $index=>$section)
                         {
                            $title=$section['sectionTitle'];
                            $sendsection=urlencode(base64_encode(serialize($section)));
                            //$sectionID=urlencode(base64_encode($section['sectionID']));
                            ?>
                              <li><a href="updatesection.php?section=<?=$sendsection?>&&module=<?=$moduleID?>"><?=$title?></a></li>
                            <?php
                         }
                          //select all existing sections
                             //$conn=mysqli_connect()
                          ?>
                        <!--<li class="active"><a href="form_basic.html">Home</a></li>-->
                        <li><a href="newsection.php?module=<?=$moduleID?>">New Section</a></li>
                      
                    </ul>
                </li>

                <li class="">
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Blog</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                   
                          <?php
                          $query3="select * from blog;";
            
                          $result3=$conn->query($query3);
                          $blogposts=$result3->fetchAll(PDO::FETCH_ASSOC);
                          
                          ?>
                          <li><a href="updateblog.php">Blog Carousel</a></li>
                          <?php
                         foreach($blogposts as $index=>$blogpost)
                         {
                            $title=$blogpost['title'];
                            $sendblogpost=urlencode(base64_encode(serialize($blogpost)));
                            //$sectionID=urlencode(base64_encode($section['sectionID']));
                            ?>
                              <li><a href="updatepost.php?post=<?=$sendblogpost?>"><?=$title?></a></li>
                            <?php
                         }
                          //select all existing sections
                             //$conn=mysqli_connect()
                          ?>
                        <!--<li class="active"><a href="form_basic.html">Home</a></li>-->
                        <li><a href="newpost.php">New Post</a></li>
                      
                    </ul>
                </li>


                <li class="">
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Gallery</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li class=""><a href="gallerypage.php">View | Upload Images</a></li>
                    </ul>
                </li>

             
             
            </ul>

        </div>
    </nav>