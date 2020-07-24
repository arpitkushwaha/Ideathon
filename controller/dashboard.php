<?php
session_start();
require_once "../include/error.php";
require_once "../include/db_connect.php";
require_once "../include/function.php";

if (isset($_POST['readmorebloglist'])) {

    $_SESSION['blog_id'] = $_POST['blog_id'];
    $_SESSION['blog_author_name'] = $_POST['blog_author_name'];
    $_SESSION['blog_title'] = $_POST['blog_title'];
    $_SESSION['blog_description'] = $_POST['blog_description'];
    $_SESSION['blog_content']  = $_POST['blog_content'];
    $_SESSION['blog_category_name'] = $_POST['blog_category_name'];
	$_SESSION['blog_video'] = $_POST['blog_video'];
    $_SESSION['blog_created_at'] = $_POST['blog_created_at'];
    
    redirect_to('detailblog.php');
    
}

if (isset($_POST['askavet_detail'])) {

    $_SESSION['askavet_id'] = $_POST['askavet_id'];
    $_SESSION['askavet_author_name'] = $_POST['askavet_author_name'];
    $_SESSION['askavet_title'] = $_POST['askavet_title'];
    $_SESSION['askavet_content']  = $_POST['askavet_content'];
    $_SESSION['askavet_category_name'] = $_POST['askavet_category_name'];
	$_SESSION['askavet_video'] = $_POST['askavet_video'];
    $_SESSION['askavet_created_at'] = $_POST['askavet_created_at'];
    
    redirect_to('forumdetail.php');
    
}

if (isset($_POST['forum_detail'])) {

    $_SESSION['forum_id'] = $_POST['forum_id'];
    $_SESSION['forum_author_name'] = $_POST['forum_author_name'];
    $_SESSION['forum_title'] = $_POST['forum_title'];
    $_SESSION['forum_content']  = $_POST['forum_content'];
    $_SESSION['forum_category_name'] = $_POST['forum_category_name'];
	$_SESSION['forum_video'] = $_POST['forum_video'];
    $_SESSION['forum_created_at'] = $_POST['forum_created_at'];
    
    redirect_to('communityforumdetail.php');
    
}

//Read More button of Ask a Vet
if (isset($_POST['readmore_askavet'])) {

    $_SESSION['askavet_id'] = $_POST['askavet_id'];
    $_SESSION['askavet_author_name'] = $_POST['askavet_author_name'];
    $_SESSION['askavet_author_image'] = $_POST['askavet_author_image'];
    $_SESSION['askavet_title'] = $_POST['askavet_title'];
    $_SESSION['askavet_description'] = $_POST['askavet_description'];
    $_SESSION['askavet_content']  = $_POST['askavet_content'];
    $_SESSION['askavet_category_name'] = $_POST['askavet_category_name'];
    $_SESSION['askavet_video'] = $_POST['askavet_video'];
    $_SESSION['askavet_created_at'] = $_POST['askavet_created_at'];
    
    redirect_to('forumdetail.php');
    
}


//Comment Vet
if(isset($_POST['comment']))
{
  $user_id = $_POST['askavet_author_id'];
  $post_id = $_POST['askavet_post_id'];
  $content = $_POST['content'];
  //$content = str_replace(str_split("\\/:*'<>|"), ' ', $content);
  
//   $sql = "INSERT INTO askavet_comment(content, post_fk, user_fk) VALUES ('$content', $post_id, $user_id)" ;
        
//   if ($conn->query($sql) === TRUE) 
//   {
//     redirect_to('forumdetail.php');
//   }
//   else{
//   }

  if($stmt = $conn->prepare("INSERT INTO askavet_comment(content, post_fk, user_fk) VALUES (?, ?, ?)")) 
  {
    if(!$stmt->bind_param("sii", $content, $post_id, $user_id))
    {
      //echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
    }
    if(!$stmt->execute())
    {
      //echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
    }
      redirect_to('forumdetail.php');
  }
  else
  {
    //echo "Table insertion failed: (" . $conn->errno . ") " . $conn->error;  
  }  

}

?>