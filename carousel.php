<div id="inSlider" class="carousel slide" data-ride="carousel" style="margin-top:146px" >
    <?php

            include_once("admin/Dbconnect.php");
            $conn=(new Admin\Dbconnect)->connect();
            $sql="select * from carousel;";
            $result=$conn->query($sql);
            $images=$result->fetchAll(PDO::FETCH_ASSOC);
        ?>
         <ol class="carousel-indicators">
        <?php

            foreach($images as $index=>$image)
            {
                if($index==0)
                {
                ?>
                  

                  <li data-target="#inSlider" data-slide-to="<?=$index?>" class="active"></li>
                <?php
                }
                else
                {
                    ?>
                  

                    <li data-target="#inSlider" data-slide-to="<?=$index?>"></li>
                  <?php 
                }
            }
    ?>
     </ol>
        
       
   
    <div class="carousel-inner" role="listbox">

    <?php

foreach($images as $index=>$image)
{
    if($index==0)
    {
    ?>
       <div class="carousel-item active">
            <div class="container">
                <div class="carousel-caption">
                    <h1 style="width:70%;overflow-wrap: break-word;">
                        <?=$image['caption']?>
                        </h1>
                    <p></p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="projects/" role="button">READ MORE</a>
                       
                    </p>
                </div>
                <div class="carousel-image wow zoomIn">
                    
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one" style="background: url('imgs/<?=$image['image']?>'),linear-gradient(rgba(0,0,0,0.3),rgba(50,100,0,0.2)) 50% 0 no-repeat;background-size:cover; background-blend-mode: overlay;"></div>

        </div>
    <?php
    }
    else
    {
        ?>
          
          <div class="carousel-item ">
            <div class="container">
                <div class="carousel-caption">
                    <h1>
                    <?=$image['caption']?>
                        </h1>
                    <p></p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="projects/" role="button">READ MORE</a>
                       
                    </p>
                </div>
                <div class="carousel-image wow zoomIn">
                    
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one" style="background: url('imgs/<?=$image['image']?>'),linear-gradient(rgba(0,0,0,0.3),rgba(50,100,0,0.2)) 50% 0 no-repeat;background-size:cover; background-blend-mode: overlay;"></div>

        </div>

        <?php
    }
}
?>
        
    </div>
    <a class="carousel-control-prev" href="#inSlider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#inSlider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
