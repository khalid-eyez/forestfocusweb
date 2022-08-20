<?php session_start(); ?>
<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.4/form_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 22:25:11 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Update Blog Post</title>

    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="../../css/animate.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">

    <link href="../../css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body class="no-skin-config">

    <div id="wrapper">
  
    <?php 
    //session_start();
  
    $sec=$_GET['post'];
    $postdata=unserialize(base64_decode(urldecode($sec)));
    //finding section images

   
    include_once("sidebar.php");




     ?>
    
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
          <?php include_once("topbar.php") ?>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><i class="fa fa-edit"></i>Update Blog Post</h2>
                   
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
     
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                        <a class="btn btn-success m-1" href="deletepost.php?post=<?=urlencode(base64_encode($postdata['blogID']))?>"> <i class="fa fa-trash float-right"></i> Delete Post</a>
                        <a class="btn btn-success m-1" href="newpostsection.php?post=<?=urlencode(base64_encode($postdata['blogID']))?>"> <i class="fa fa-plus-circle float-right"></i> New Section</a>
                            <div class="ibox-tools">
                                
                            </div>
                        </div>
                        <div class="ibox-content">
                        <form action="blogupdater.php?blog=<?=$sec?>" method="post" enctype="multipart/form-data">
         
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Title</label>

                                <div class="col-sm-10"><input type="text" name="title" value="<?=$postdata['title']?>" class="form-control" required></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Text (Introduction)</label>

                                <div class="col-sm-10"><textarea name="text" value="" class="form-control" rows=11 required><?=$postdata['intro']?></textarea></div>
                                </div>
                            
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                             Post Image
                            <div class="ibox-tools">
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                              <div class="row">
                                   <div class="col-sm-6">
                                   <img src="../../imgs/<?=$postdata['image']?>" class="img-thumbnail" height="200px";width="100%">
                                     
                                  </img>
                                  
                                  </div>
                              
                                   </div>
                                    <input name="images[]" class="form-control" type="file" multiple="multiple" accept="image/*" /><br>
                               
                                <div class="form-group  row">
                                <div class="col-sm-12"><button type="submit"  class="form-control  bg-primary" ><i class="fa fa-save"></i> Save Changes</button></div>
                                </div>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                       
                        <div class="ibox-content">
                              <div class="row">
                                   <div class="col-sm-12 text-center text-lg">
                                    <h1>Post Sections</h1>
                                   </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
            <?php
              include_once("../Dbconnect.php");

              $conn=(new Admin\Dbconnect)->connect();
              $sql="select * from blogsections where blogID=".$postdata['blogID'].";";
              $result=$conn->query($sql);
              $sections=$result->fetchAll(PDO::FETCH_ASSOC);
             
              foreach($sections as $index=>$section)
              {
                ?>
                      <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                             <span class="text-bold"><strong>Title:</strong></span> <?=$section['subtitle']?>
                            <div class="ibox-tools">
                              <a class="text-success" href="updatepostsection.php?section=<?=urldecode(base64_encode(serialize($section)))?>"><i class="fa fa-edit text-success"></i></a>
                              <a class="text-danger" href="deletepostsection.php?section=<?=urldecode(base64_encode(serialize($section)))?>"><i class="fa fa-trash text-danger"></i></a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-sm-12">
                                <?=$section['description']?>
                                 </div>
                            </div>
                              <div class="row">
                                  <?php

                                        $sql2="select * from blogsectionimages where sectionID=".$section['sectionID'].";";
                                        $result2=$conn->query($sql2);
                                        $images=$result2->fetchAll(PDO::FETCH_ASSOC);

                                        foreach($images as $index=>$image)
                                        {
                                            ?>
                                            <div class="col-sm-2" >
                                              <img src="../../imgs/<?=$image['image']?>" class="img-thumbnail" style="max-height:100px;width:100%" >
                                     
                                              </img>
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

        </div>
    
        <div class="footer text-center">
           
           <strong>Copyright</strong> Forest Focus &copy; <?=date('Y')?>
      
   </div>
        </div>
        </div>

<!-- Mainly scripts -->
<script src="../../js/jquery-3.1.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <script src="../../js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../../js/inspinia.js"></script>
    <script src="../../js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="../../js/plugins/iCheck/icheck.min.js"></script>
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
