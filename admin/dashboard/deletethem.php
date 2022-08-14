<?php
    include_once("../Dbconnect.php");
    $conn=(new Admin\Dbconnect)->connect();

    $query="delete from thematicareas where taID=".$_POST['id'].";";
    $statement=$conn->prepare($query);

    if($statement->execute())
    {
        print 'true';
    }

   

?>