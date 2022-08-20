<?php
include_once("../Dbconnect.php");

function postimagesSave($imagesbuffer,$sectionid)
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

       $sql="insert into blogsectionimages(image,sectionID) values('". $filename."',".$sectionid.");";
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
   $title=addslashes($buffer['title']);
   $text=addslashes($buffer['text']);

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

function postsectionsave($buffer,$module)
{
   $title=addslashes($buffer['title']);
   $text=addslashes($buffer['text']);

$conn=(new Admin\Dbconnect)->connect();
$sql="insert into blogsections(subtitle,description,blogID) values('".$title."','".$text."',".$module.");";
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
   $title=addslashes($buffer['title']);
   $text=addslashes($buffer['text']);
   
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
function orgupdate($buffer)
{
   $email=$buffer['email'];
   $phone=$buffer['phone'];
   $facebook=$buffer['facebook'];
   $twitter=$buffer['twitter'];
   $instagram=$buffer['instagram'];
   $youtube=$buffer['youtube'];
   $linkedin=$buffer['linkedin'];
   $address=$buffer['address'];
   
$conn=(new Admin\Dbconnect)->connect();
$sql="update organisation set phone='".$phone."',email='".$email."',facebook='".$facebook."',twitter='".$twitter."',instagram='".$instagram."',youtube='".$youtube."',linkedin='".$linkedin."',address='".$address."';";
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
function postsectionupdate($buffer,$section)
{
   $title=addslashes($buffer['title']);
   $text=addslashes($buffer['text']);
   
$conn=(new Admin\Dbconnect)->connect();
$sql="update blogsections set subtitle='".$title."',description='".$text."' where sectionID=".$section.";";
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
function blogupdate($buffer,$image,$post)
{
   $title=addslashes($buffer['title']);
   $text=addslashes($buffer['text']);
   
   if(!empty($image['images']['name'][0]))
   {
   $name=$image['images']['name'][0];
   $tmp=$image['images']['tmp_name'][0];
   $name=basename($name);
   $ext=pathinfo($name,PATHINFO_EXTENSION);
   $id=uniqid();
   $filename=$id.".".$ext;
   $folder="../../imgs/";
   $fullpath=$folder.$filename;

   if(move_uploaded_file($tmp,$fullpath))
   {
$conn=(new Admin\Dbconnect)->connect();
$sql="update blog set title='".$title."',intro='".$text."',image='".$filename."' where blogID=".$post.";";
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
   else
   {
    return false;
   }
}
else
{
$conn=(new Admin\Dbconnect)->connect();
$sql="update blog set title='".$title."',intro='".$text."' where blogID=".$post.";";
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




}

function newblogpost($buffer,$image)
{
   $title=addslashes($buffer['title']);
   $text=addslashes($buffer['text']);
   
   if(empty($image['images']['name'][0]))
   {
    return false;
   }
   $name=$image['images']['name'][0];
   $tmp=$image['images']['tmp_name'][0];
   $name=basename($name);
   $ext=pathinfo($name,PATHINFO_EXTENSION);
   $id=uniqid();
   $filename=$id.".".$ext;
   $folder="../../imgs/";
   $fullpath=$folder.$filename;

   if(move_uploaded_file($tmp,$fullpath))
   {
$conn=(new Admin\Dbconnect)->connect();
$sql="insert into blog (title,intro,image) values('".$title."','".$text."','".$filename."');";
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
    
           $sql="insert into modulecarousel(image,moduleID) values('".$filename."',$modid);";
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
function updateblog($imagesbuffer)
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
    
           $sql="insert into blogcarousel(image) values('".$filename."');";
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

       $sql="insert into carousel(image,caption,referenceurl) values('". $filename."','".addslashes($caption)."','');";
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
   $title=addslashes($buffer['title']);
   $section=addslashes($buffer['section']);

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
   $vision=addslashes($buffer['vision']);
   $mission=addslashes($buffer['mission']);
   $philo=addslashes($buffer['philosophy']);
   $target=addslashes($buffer['target']);
   
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

       $sql="insert into acheivements(image,caption) values('". $filename."','".addslashes($caption)."');";
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