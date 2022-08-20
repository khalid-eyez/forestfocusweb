<?php
    include_once("../Dbconnect.php");
    $conn=(new Admin\Dbconnect)->connect();
   
    $section=unserialize(base64_decode(urldecode($_GET['section'])));
    $query="delete from blogsections where sectionID=".$section['sectionID'].";";
    $statement=$conn->prepare($query);

    if($statement->execute())
    {
        session_start();
        $_SESSION['message']="section deleted successfully";
        header("location:newpostsection.php?post=".urlencode(base64_encode($section['blogID'])));
    }

   

?>