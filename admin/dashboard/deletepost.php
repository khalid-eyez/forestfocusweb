<?php
    include_once("../Dbconnect.php");
    $conn=(new Admin\Dbconnect)->connect();
   
    $post=base64_decode(urldecode($_GET['post']));
    $query="delete from blog where blogID=".$post.";";
    $statement=$conn->prepare($query);

    if($statement->execute())
    {
        session_start();
        $_SESSION['message']="Post deleted successfully";
        header("location:newpost.php");
    }

   

?>