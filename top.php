<div class="navbar-wrapper" style="background-color: rgba(13, 117, 30,.8);">
    <div class="row" style="background-color: rgba(232, 237, 252);">
        <div class="col-sm-3 p-2">
            <img src="/logo/logo.png" width="90px" height="90px"/>
           <span class="" style="font-size:30px;color:#0d751e">FOREST FOCUS</span>
        </div>
        <div class="col-sm-9 pr-4" >
            <ul class=" float-right mt-4 mr-4" style="list-style:none;font-size:35px;color:#10ff00!important">
                 <?php
                        include_once("admin/Dbconnect.php");

                        $conn=(new Admin\Dbconnect)->connect();
                        $sql="select * from organisation;";
                        $result=$conn->query($sql);
                        $socials=$result->fetchAll(PDO::FETCH_ASSOC)[0];
                       
                 ?>
                <li class="float-left mr-4" ><a href="<?=$socials['facebook']?>"><i class="fa fa-facebook" style="color:green!important"></i> </a></li>
                <li class="float-left mr-4"><a href="<?=$socials['twitter']?>"><i class="fa fa-twitter" style="color:green!important"></i> </a></li>
                <li class="float-left mr-4"><a href="<?=$socials['instagram']?>"><i class="fa fa-instagram" style="color:green!important"></i> </a></li>
                <li class="float-left mr-4"><a href="<?=$socials['linkedin']?>"><i class="fa fa-linkedin" style="color:green!important"></i> </a></li>
                <li class="float-left mr-4"><a href="<?=$socials['youtube']?>"><i class="fa fa-youtube" style="color:green!important"></i> </a></li>
            </ul>
        </div>
    </div>
        <nav class="navbar navbar-default  navbar-expand-md" style="height:40px;padding:5px" role="navigation">
            <div class="container p-0">
                <div class="collapse navbar-collapse justify-content-end"  id="navbar">
                    <ul class="nav navbar-nav navbar-right" style="padding:0px;margin-top: 0px;">
                        <li><a class="nav-link page-scroll" href="/"  ><i class="fa fa-home"></i>Home</a></li>
                        <li><a class="nav-link page-scroll" href="/philosophy" ><i class="fa fa-tasks"></i>PHILOSOPHY</a></li>
                        <li><a class="nav-link page-scroll" href="/projects" ><i class="fa fa-cog"></i>PROJECTS</a></li>
                        <li><a class="nav-link page-scroll" href="/about" ><i class="fa fa-group"></i>About us</a></li>
                        <li><a class="nav-link page-scroll" href="/blog" ><i class='fa fa-comments'></i>Blog</a></li>
                        <li><a class="nav-link page-scroll" href="/gallery" ><i class='fa fa-picture-o'></i>Gallery</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</div>