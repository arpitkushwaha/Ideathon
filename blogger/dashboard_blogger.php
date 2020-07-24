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
        $_SESSION["blogger"] = true;
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
    //$content = str_replace(str_split("\\/:*'<>|"), ' ', $content);
    $category = $_POST['category'];
    $video = $_POST['video'];
    //$created_at = date('Y-m-d h:i:s');

    $user_fk = $_SESSION['id'];


        if ($stmt = $conn->prepare("SELECT * FROM blog_categories WHERE name=?")) 
        {
          /* bind parameters for markers */
          if(!$stmt->bind_param("s", $category))
          {
            //echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
          }

          /* execute query */
          if(!$stmt->execute())
          {
            //echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
          }

          /* instead of bind_result: */
          $result = $stmt->get_result();
          /* now you can fetch the results into an array - NICE */
          while ($row = $result->fetch_assoc()) 
          {
            $category_fk = $row['id'];
          }
        }
        else
        {
          //echo "Table insertion failed: (" . $conn->errno . ") " . $conn->error;  
        }   
        
        try 
        {

          if($stmt = $conn->prepare("INSERT INTO blog_post(title, description, content, video, user_fk, category_fk) VALUES (?, ?, ?, ?, ?, ?)")) 
          {
            if(!$stmt->bind_param("ssssii", $title, $description, $content, $video, $user_fk, $category_fk))
            {
              //echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
            }
            if(!$stmt->execute())
            {
              //echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
            }
    
            if(isset($_FILES['fileToUpload']))
            {
            //Last id in blog_post table
            $last_id = $stmt->insert_id;
    
            //Upload photo with last_id name 
            $target_dir = "uploads/createblog/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            $target_file = "uploads/createblog/".$last_id.".".$imageFileType;
            
              move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

              $file_name = $last_id.".".$imageFileType;
              //Update status of document in database
              if(!$stmt = $conn->prepare("UPDATE blog_post SET image=? WHERE id=?"))
              {
                //echo "Table updation failed: (" . $conn->errno . ") " . $conn->error;
              }
              
              if(!$stmt->bind_param('si', $file_name, $last_id))
              {
                //echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
              }
              
              if(!$stmt->execute())
              {
                //echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
              }

              redirect_to('blogger/userbloglist_all.php');
            }
          }
        
      }
      catch(Exception $e) 
      {  
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

    if ($stmt = $conn->prepare("SELECT * FROM blog_post WHERE id=?")) 
    {
      /* bind parameters for markers */
      if(!$stmt->bind_param("i", $blog_id))
      {
        //echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
      }

      /* execute query */
      if(!$stmt->execute())
      {
        //echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
      }

      /* instead of bind_result: */
      $result = $stmt->get_result();
      /* now you can fetch the results into an array - NICE */
      while ($row = $result->fetch_assoc()) 
      {
        if(!empty($row['image']))
        {
          //Delete previous image
          if (file_exists('uploads/createblog/'.$row['image'])) 
          {
            unlink('uploads/createblog/'.$row['image']);
          }
        }
      }
    }
    else
    {
      //echo "Table selection failed: (" . $conn->errno . ") " . $conn->error;  
    } 
  
  // sql to delete a record
  $sql = "DELETE FROM blog_post WHERE id=$blog_id";

  if ($conn->query($sql) === TRUE) {
    
    redirect_to('blogger/userbloglist_all.php');

  } else {
    
  }
}


//Blogger Edit Blog
if (isset($_POST['editblog'])) {
    
    $blog_id = $_SESSION['blog_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $category = $_POST['category'];
    $video = $_POST['video'];
    if ($stmt = $conn->prepare("SELECT * FROM blog_categories WHERE name=?")) 
        {
          /* bind parameters for markers */
          if(!$stmt->bind_param("s", $category))
          {
            //echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
          }

          /* execute query */
          if(!$stmt->execute())
          {
            //echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
          }

          /* instead of bind_result: */
          $result = $stmt->get_result();
          /* now you can fetch the results into an array - NICE */
          while ($row = $result->fetch_assoc()) 
          {
            $category_fk = $row['id'];
          }
        }
        else
        {
          //echo "Table insertion failed: (" . $conn->errno . ") " . $conn->error;  
        }   

    
        $user_fk = $_SESSION['id'];
        
        if ($stmt = $conn->prepare("UPDATE blog_post SET title=?, description=?, content=?, video=?, category_fk=? WHERE id=? AND user_fk=?")) 
            {
              
              /* bind parameters for markers */
              if(!$stmt->bind_param("ssssiii", $title, $description, $content, $video, $category_fk, $blog_id, $user_fk))
              {
                //echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
              }
        
              /* execute query */
              if(!$stmt->execute())
              {
                //echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
              }
        
              if(isset($_FILES['fileToUpload']))
              {

                  if ($stmt = $conn->prepare("SELECT * FROM blog_post WHERE id=?")) 
                  {
                    /* bind parameters for markers */
                    if(!$stmt->bind_param("i", $blog_id))
                    {
                      //echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
                    }

                    /* execute query */
                    if(!$stmt->execute())
                    {
                      //echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                    }

                    /* instead of bind_result: */
                    $result = $stmt->get_result();
                    /* now you can fetch the results into an array - NICE */
                    while ($row = $result->fetch_assoc()) 
                    {
                      if(!empty($row['image']))
                      {
                        //Delete previous image
                        if (file_exists('uploads/createblog/'.$row['image'])) 
                        {
                          unlink('uploads/createblog/'.$row['image']);
                        }
                      }
                    }
                  }
                  else
                  {
                    //echo "Table selection failed: (" . $conn->errno . ") " . $conn->error;  
                  }  
     
                //Upload photo with last_id name 
                $target_dir = "uploads/createblog/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
                $target_file = "uploads/createblog/".$blog_id.".".$imageFileType;
                
                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    
                $file_name = $blog_id.".".$imageFileType;

                      //Update status of document in database
                      if(!$stmt = $conn->prepare("UPDATE blog_post SET image=? WHERE id=?"))
                      {
                        //echo "Table updation failed: (" . $conn->errno . ") " . $conn->error;
                      }
                      
                      if(!$stmt->bind_param('si', $file_name, $blog_id))
                      {
                        //echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
                      }
                      
                      if(!$stmt->execute())
                      {
                        //echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                      }
        
                      redirect_to('blogger/userbloglist_all.php');
                    }

            }
            else
            {
              //echo "Table Updation failed: (" . $conn->errno . ") " . $conn->error;  
            }   
        
}


//Specific Category Posts Filter
if(isset($_POST['category_id_filter']))
{
  $category_id_filter = $_POST['category_id_filter'];
  $_SESSION['category_id_filter'] = $category_id_filter;

  //Redirect to specific category posts
  redirect_to('blogger/userbloglist_category.php');
}

?>