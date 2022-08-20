<section id="contact text-lg" class="gray-section contact" style="font-size:40px">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
               
            </div>
        </div>
        <div class="row m-b-lg justify-content-center">
            <div class="col-lg-12 text-center">
                <img src="/logo/logo.png" width="70px" height="70px"/>
        
            </div>
     
        </div>
        <div class="row">
        <?php
                        include_once("admin/Dbconnect.php");

                        $conn=(new Admin\Dbconnect)->connect();
                        $sql="select * from organisation;";
                        $result=$conn->query($sql);
                        $socials=$result->fetchAll(PDO::FETCH_ASSOC)[0];
                       
                 ?>
            <div class="col-lg-12 text-center">
             
                <ul class="list-inline " style="list-style:none;font-size:25px;color:#10ff00!important">
          

                <li class="list-inline-item" ><a href="<?=$socials['facebook']?>"><i class="fa fa-facebook" style="color:green!important"></i> </a></li>
                <li class="list-inline-item"><a href="<?=$socials['twitter']?>"><i class="fa fa-twitter" style="color:green!important"></i> </a></li>
                <li class="list-inline-item"><a href="<?=$socials['instagram']?>"><i class="fa fa-instagram" style="color:green!important"></i> </a></li>
                <li class="list-inline-item"><a href="<?=$socials['linkedin']?>"><i class="fa fa-linkedin" style="color:green!important"></i> </a></li>
                <li class="list-inline-item"><a href="<?=$socials['youtube']?>"><i class="fa fa-youtube" style="color:green!important"></i> </a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center m-t-lg m-b-lg " >
                <p> Copyright <strong>&copy; 2022 Forest Focus</strong> &nbsp&nbsp&nbsp <i class="fa fa-envelope"></i> <?=$socials['email']?> &nbsp&nbsp&nbsp <i class="fa fa-phone"></i> <?=$socials['phone']?> &nbsp&nbsp&nbsp <?=$socials['address']?> </p>
            </div>
        </div>
    </div>
</section>
