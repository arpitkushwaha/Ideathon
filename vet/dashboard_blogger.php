<?php
session_start();
require_once "../include/error.php";
require_once "../include/db_connect.php";
require_once "../include/function.php";


//Blogger Login Form
if (isset($_POST['blogger'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

$sql_e = "SELECT * FROM user_master WHERE email='$email' and password='$password' and role='Blogger'" ;
$result = $conn->query($sql_e);

  if($result->num_rows > 0){

    while($row = $result->fetch_assoc()) {
       // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. " " . $row["password"]. "<br>";
        
        //Set session values
        $_SESSION["logged"] = true;
        $_SESSION["id"] = $row["id"];
        $_SESSION["name"] = $row["name"];
        $_SESSION["username"] = $row["username"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["password"] = $row["password"];
        $_SESSION["ownapet"] = $row["ownapet"];
        $_SESSION["adoptapet"] = $row["adoptapet"];
        $_SESSION["role"] = $row["role"];
        $_SESSION["address"] = $row["address"];
        $_SESSION["phone"] = $row["phone"];
        $_SESSION["city"] = $row["city"];
        $_SESSION["state"] = $row["state"];
        $_SESSION["role"] = $row["role"]; 
        
      }        
      
      //Redirect user to dashboard
     redirect_to("blogger/userbloglist_all.php");
      
      }else{

      $user_login_error = "Invalid login credentials. Please try again."; 
      
  }
}


//Blogger- create a Blog
if (isset($_POST['createblog'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
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

//Read More button of MyBlogs
if (isset($_POST['readmore'])) {

  $_SESSION['blog_id'] = $_POST['blog_id'];
  $_SESSION['blog_author_name'] = $_POST['blog_author_name'];
  $_SESSION['blog_title'] = $_POST['blog_title'];
  $_SESSION['blog_description'] = $_POST['blog_description'];
  $_SESSION['blog_content']  = $_POST['blog_content'];
  $_SESSION['blog_category_name'] = $_POST['blog_category_name'];
$_SESSION['blog_video'] = $_POST['blog_video'];
  $_SESSION['blog_created_at'] = $_POST['blog_created_at'];
  
  redirect_to('blogger/detailblog.php');
  
}
?>