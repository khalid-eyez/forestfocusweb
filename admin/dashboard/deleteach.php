<?php
    include_once("../Dbconnect.php");
    $conn=(new Admin\Dbconnect)->connect();


    $sql0="select * from acheivements where achieveID=".$_POST['id'].";";
    $result=$conn->query($sql0);
    $image=$result->fetchAll(PDO::FETCH_ASSOC)[0];
    $path="../../imgs/".$image['image'];

   

    $query="delete from acheivements where achieveID=".$_POST['id'].";";
    $statement=$conn->prepare($query);

    if($statement->execute())
    {
        if(file_exists($path)){ unlink($path);}
        print 'true';
    }

   

?>