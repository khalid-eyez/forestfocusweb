
<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header text-center text-lg pt-3 pl-5 d-flex justify-content-center">
          <?php
           ini_set('post_max_size', '250M');
           ini_set('upload_max_filesize', '50M');
           if(isset($_SESSION['error']) && $_SESSION['error']!="")
           {
            ?>
               <span class="text-danger"><i class="fa fa-info-circle"></i> <?=$_SESSION['error']?></span>
            <?php
            $_SESSION['error']="";
           }
           else if(isset($_SESSION['message']) && $_SESSION['message']!="")
           {
            ?>
               <span class="text-success"><i class="fa fa-exclamation-triangle"></i> <?=$_SESSION['message']?></span>
            <?php
            $_SESSION['message']="";
           }
           else
           {

           }
           
          ?>
        </div>
            <ul class="nav navbar-top-links navbar-right">
               

                <li>
                    <a href="logout.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>