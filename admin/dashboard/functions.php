<?php
include_once("../Dbconnect.php");


function imagesSave($imagesbuffer,$sectionid)
{

$conn=(new Admin\Dbconnect)->connect();
$images=$imagesbuffer['images'];
$names=$images['name'];
$tmps=$images['tmp_name'];
$errors=0;
for($i=0;$i<count($names);$i++)
{
   $name=$names[$i];
   $tmp=$tmps[$i];
   
   ////////// uploading /////////

   $name=basename($name);
   $ext=pathinfo($name,PATHINFO_EXTENSION);
   $id=uniqid();
   $filename=$id.".".$ext;
   $folder="../../imgs/";
   $fullpath=$folder.$filename;

   if(move_uploaded_file($tmp,$fullpath))
   {
   
       /// saving to the database

       $sql="insert into sectionimages(image,sectionID) values('". $filename."',".$sectionid.");";
       if(!$conn->query($sql))
       {
        $errors++;
        if(file_exists($fullpath))
        {
            unlink($fullpath);
        }
        continue;
       }
  
   }



}
return $errors;

}

//////////////// saving section


function sectionsave($buffer,$module)
{
   $title=$buffer['title'];
   $text=$buffer['text'];

$conn=(new Admin\Dbconnect)->connect();
$sql="insert into sections(sectionTitle,moduleID,description) values('".$title."',".$module.",'".$text."');";
if($conn->query($sql))
{
    return $conn->lastInsertId();
}
else
{
    return false;
}
}


function sectionupdate($buffer,$section)
{
   $title=$buffer['title'];
   $text=$buffer['text'];
   
$conn=(new Admin\Dbconnect)->connect();
$sql="update sections set sectionTitle='".$title."',description='".$text."' where sectionID=".$section.";";
//return $sql;
$statement=$conn->prepare($sql);
if($statement->execute())
{
    return $section;
}
else
{
    return false;
}





}
function updatemoduleback($imagesbuffer,$modid)
{

    $conn=(new Admin\Dbconnect)->connect();
    $images=$imagesbuffer['images'];
    $names=$images['name'];
    $tmps=$images['tmp_name'];
    $errors=0;
    for($i=0;$i<count($names);$i++)
    {
       $name=$names[$i];
       $tmp=$tmps[$i];
       
       ////////// uploading /////////
    
       $name=basename($name);
       $ext=pathinfo($name,PATHINFO_EXTENSION);
       $id=uniqid();
       $filename=$id.".".$ext;
       $folder="../../imgs/";
       $fullpath=$folder.$filename;
    
       if(move_uploaded_file($tmp,$fullpath))
       {
       
           /// saving to the database
    
           $sql="update modules set moduleimage='".$filename."' where modID=".$modid.";";
           $stm=$conn->prepare($sql);
           if(!$stm->execute())
           {
            $errors++;
            if(file_exists($fullpath))
            {
                unlink($fullpath);
            }
            continue;
           }
      
       }
    
    
    
    }
    return $errors;
    

}

function gallerySave($imagesbuffer)
{

$conn=(new Admin\Dbconnect)->connect();
$images=$imagesbuffer['images'];
$names=$images['name'];
$tmps=$images['tmp_name'];
$errors=0;
for($i=0;$i<count($names);$i++)
{
   $name=$names[$i];
   $tmp=$tmps[$i];
   
   ////////// uploading /////////

   $name=basename($name);
   $ext=pathinfo($name,PATHINFO_EXTENSION);
   $id=uniqid();
   $filename=$id.".".$ext;
   $folder="../../imgs/";
   $fullpath=$folder.$filename;

   if(move_uploaded_file($tmp,$fullpath))
   {
   
       /// saving to the database

       $sql="insert into gallery(image) values('". $filename."');";
       if(!$conn->query($sql))
       {
        $errors++;
        if(file_exists($fullpath))
        {
            unlink($fullpath);
        }
        continue;
       }
  
   }



}
return $errors;

}
function carouselsave($imagesbuffer,$caption)
{
$conn=(new Admin\Dbconnect)->connect();
$images=$imagesbuffer['images'];
$names=$images['name'];
$tmps=$images['tmp_name'];
$errors=0;
for($i=0;$i<count($names);$i++)
{
   $name=$names[$i];
   $tmp=$tmps[$i];
   
   ////////// uploading /////////

   $name=basename($name);
   $ext=pathinfo($name,PATHINFO_EXTENSION);
   $id=uniqid();
   $filename=$id.".".$ext;
   $folder="../../imgs/";
   $fullpath=$folder.$filename;

   if(move_uploaded_file($tmp,$fullpath))
   {
   
       /// saving to the database

       $sql="insert into carousel(image,caption,referenceurl) values('". $filename."','". $caption."','');";
       if(!$conn->query($sql))
       {
        $errors++;
        if(file_exists($fullpath))
        {
            unlink($fullpath);
        }
        continue;
       }
  
   }



}
return $errors;
}

function thematicsave($buffer)
{
   $title=$buffer['title'];
   $section=$buffer['section'];

$conn=(new Admin\Dbconnect)->connect();
$sql="insert into thematicareas(title,sectionID) values('".$title."',".$section.");";
if($conn->query($sql))
{
    return true;
}
else
{
    return false;
}
}

function updateprofile($buffer)
{
   $vision=$buffer['vision'];
   $mission=$buffer['mission'];
   $philo=$buffer['philosophy'];
   $target=$buffer['target'];
   
$conn=(new Admin\Dbconnect)->connect();
$sql="update orgprofile set mission='".$mission."',vision='".$vision."',target='".$target."',philosophy='".$philo."';";
//return $sql;
$statement=$conn->prepare($sql);
if($statement->execute())
{
    return true;
}
else
{
    return false;
}





}

function achsave($imagesbuffer,$caption)
{
$conn=(new Admin\Dbconnect)->connect();
$images=$imagesbuffer['images'];
$names=$images['name'];
$tmps=$images['tmp_name'];
$errors=0;
for($i=0;$i<count($names);$i++)
{
   $name=$names[$i];
   $tmp=$tmps[$i];
   
   ////////// uploading /////////

   $name=basename($name);
   $ext=pathinfo($name,PATHINFO_EXTENSION);
   $id=uniqid();
   $filename=$id.".".$ext;
   $folder="../../imgs/";
   $fullpath=$folder.$filename;

   if(move_uploaded_file($tmp,$fullpath))
   {
   
       /// saving to the database

       $sql="insert into acheivements(image,caption) values('". $filename."','". $caption."');";
       if(!$conn->query($sql))
       {
        $errors++;
        if(file_exists($fullpath))
        {
            unlink($fullpath);
        }
        continue;
       }
  
   }



}
return $errors;
}





?>