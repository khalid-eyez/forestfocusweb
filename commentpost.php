<?php
 include_once("admin/Dbconnect.php");
 $post=base64_decode(urldecode($_GET['post']));

 $conn=(new Admin\Dbconnect)->connect();

 $name=addslashes($_POST['fullname']);
 $comment=addslashes($_POST['comment']);
 $email=addslashes($_POST['email']);
 $query="insert into blogcomments(blogID,fullname,comment,email) values(".$post.",'".$name."','".$comment."','".$email."');";
 $conn->query($query);
 
 header('location:'.$_SERVER['HTTP_REFERER']);
 


?>