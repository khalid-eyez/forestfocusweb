<?php
    include_once("../Dbconnect.php");
    $conn=(new Admin\Dbconnect)->connect();
   
    $section=unserialize(base64_decode(urldecode($_GET['section'])));
    $query="delete from sections where sectionID=".$section['sectionID'].";";
    $statement=$conn->prepare($query);

    if($statement->execute())
    {
        session_start();
        $_SESSION['message']="session deleted successfully";
        header("location:dashboard.php");
    }

   

?>