<?php
session_start();
require_once "../include/error.php";
require_once "../include/db_connect.php";
require_once "../include/function.php";


//Ask a Vet Login Form
if (isset($_POST['vet'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql_e = "SELECT * FROM user_master WHERE email='$email' and password='$password' and role='Vet'" ;
  $result = $conn->query($sql_e);

  if($result->num_rows > 0){

    while($row = $result->fetch_assoc()) {
       // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. " " . $row["password"]. "<br>";
        
        //Set session values
        $_SESSION["vet"] = true;
        $_SESSION["logged"] = true;
        $_SESSION["id"] = $row["id"];
        $_SESSION["name"] = $row["name"];
        $_SESSION["username"] = $row["username"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["password"] = $row["password"];
        $_SESSION["ownapet"] = $row["ownapet"];
        $_SESSION["adoptapet"] = $row["adoptapet"];
        $_SESSION["address"] = $row["address"];
        $_SESSION["phone"] = $row["phone"];
        $_SESSION["city"] = $row["city"];
        $_SESSION["state"] = $row["state"];
        $_SESSION["role"] = $row["role"]; 
        
      }        
      
      //Redirect user to dashboard
     redirect_to("vet/askavetlist_all.php");
      
      }else{
        
      $user_login_error = "Invalid login credentials. Please try again."; 
     
  }
}


//Blogger- create a Blog
if (isset($_POST['createblog'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $content = str_replace(str_split("\\/:*'<>|"), ' ', $content);
    $category = $_POST['category'];
    $video = $_POST['video'];
    //$created_at = date('Y-m-d h:i:s');

    $user_fk = $_SESSION['id'];

    $sql_e = "SELECT * FROM blog_categories WHERE name='$category'";
    $result = $conn->query($sql_e);
    if($result->num_rows > 0){

      while($row = $result->fetch_assoc()) {
          //Get category fk 
          $category_fk = $row['id'];
        }        
        
        $sql = "INSERT INTO blog_post(title, description, content, video, user_fk, category_fk) VALUES ('$title', '$description', '$content', '$video', $user_fk, $category_fk)" ;
        
        if ($conn->query($sql) === TRUE) {

            //Last id in blog_post table
            $last_id = $conn->insert_id;
    
            //Upload photo with last_id name 
            $target_dir = "uploads/createblog/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            $target_file = "uploads/createblog/".$last_id.".".$imageFileType;
            if(isset($_FILES['fileToUpload']))
            {
              move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
              redirect_to('blogger/userbloglist_all.php');
            }

        } else {
            //echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
      }

    }

//Read More button of Ask a Vet
if (isset($_POST['readmore'])) {

  $_SESSION['askavet_id'] = $_POST['askavet_id'];
  $_SESSION['askavet_author_name'] = $_POST['askavet_author_name'];
  $_SESSION['askavet_author_image'] = $_POST['askavet_author_image'];
  $_SESSION['askavet_title'] = $_POST['askavet_title'];
  $_SESSION['askavet_description'] = $_POST['askavet_description'];
  $_SESSION['askavet_content']  = $_POST['askavet_content'];
  $_SESSION['askavet_category_name'] = $_POST['askavet_category_name'];
  $_SESSION['askavet_video'] = $_POST['askavet_video'];
  $_SESSION['askavet_status'] = $_POST['askavet_status'];
  $_SESSION['askavet_created_at'] = $_POST['askavet_created_at'];
  
  redirect_to('vet/askavetdetail.php');
  
}

//Share Blog
if (isset($_GET['blog_id'])) {

  $blog_id = $_GET['blog_id'];
  $sql_e = "SELECT * FROM blog_post WHERE id=$blog_id"  ;
  $result = $conn->query($sql_e);
    if($result->num_rows > 0){
    while($blog_post = $result->fetch_assoc()) {

        $blog_id = $blog_post['id'];
        $blog_title = $blog_post['title'];
        $blog_description = $blog_post['description'];
        $blog_content = $blog_post['content'];
        $blog_video = $blog_post['video'];
        $user_fk = $blog_post['user_fk'];
        $category_fk = $blog_post['category_fk'];
        $created_at = $blog_post['created_at'];
      
        $sql_e = "SELECT * FROM user_master WHERE id='$user_fk'";
        $result_user_master = $conn->query($sql_e);
        $sql_e = "SELECT * FROM blog_categories WHERE id='$category_fk'";
        $result_blog_categories = $conn->query($sql_e);
        if($result_user_master->num_rows > 0 && $result_blog_categories->num_rows > 0){

        while($user_master = $result_user_master->fetch_assoc()) {
          $author_name = $user_master['name'];
          }     
        while($blog_categories = $result_blog_categories->fetch_assoc()) {
          $category_name = $blog_categories['name'];
          }  
          
            
            $_SESSION['blog_id'] = $blog_id;
            $_SESSION['blog_author_name'] = $author_name;
            $_SESSION['blog_title'] = $blog_title;
            $_SESSION['blog_description'] = $blog_description;
            $_SESSION['blog_content']  = $blog_content;
            $_SESSION['blog_category_name'] = $category_name;
            $_SESSION['blog_video'] = $blog_video;
            $_SESSION['blog_created_at'] = $created_at;
          
        }

  
      }	
    }	
  
  redirect_to('detailblog.php');
  
}

//Blogger Delete Blog
if (isset($_POST['deleteblog'])) {
  
  $blog_id = $_POST['blog_id'];
  
  // sql to delete a record
  $sql = "DELETE FROM blog_post WHERE id=$blog_id";

  if ($conn->query($sql) === TRUE) {
    
    redirect_to('blogger/userbloglist_all.php');

  } else {
    
  }
}


//Comment Vet
if(isset($_POST['comment']))
{
  $user_id = $_SESSION['id'];
  $post_id = $_POST['askavet_post_id'];
  $content = $_POST['content'];
  
  // $sql = "INSERT INTO askavet_comment(content, post_fk, user_fk) VALUES ('$content', $post_id, $user_id)" ;
        
  // if ($conn->query($sql) === TRUE) 
  // {
  //   redirect_to('vet/askavetdetail.php');
  // }
  // else{
  // }
  
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
      redirect_to('vet/askavetdetail.php');
  }
  else
  {
    //echo "Table insertion failed: (" . $conn->errno . ") " . $conn->error;  
  }  
}


//Close Thread
if(isset($_POST['closethread']))
{
  $askavet_id = $_SESSION['askavet_id'];
 
  $sql = "UPDATE askavet_post SET status='closed' WHERE id=$askavet_id";

  if ($conn->query($sql) === TRUE) {

    redirect_to('vet/askavetlist_all.php');
  
  } else {
     //echo "Error updating record: " . $conn->error;
  }

}


//Delete Vet Comment
if(isset($_POST['deletevetcomment']))
{
  $askavet_comment_id = $_POST['askavet_comment_id'];
  
  // sql to delete a record
  $sql = "DELETE FROM askavet_comment WHERE id=$askavet_comment_id";

  if ($conn->query($sql) === TRUE) {
    
    redirect_to('vet/askavetdetail.php');

  } else {
    
  }
}

?>