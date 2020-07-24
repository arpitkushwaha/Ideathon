<?php
//My Account - Personal Details Form
if (isset($_POST['personaldetails'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $ownapet = $_POST['ownapet'];
    $adoptapet = $_POST['adoptapet'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $address = str_replace(str_split("\\/:*'<>|"), ' ', $address);
    $updated_at = date('Y-m-d H:i:s');

    $sql = "UPDATE user_master SET name='$name', email='$email', phone='$phone', ownapet='$ownapet', adoptapet='$adoptapet', state='$state', city='$city', address='$address', updated_at='$updated_at' WHERE id=".$_SESSION['id'];

    if ($conn->query($sql) === TRUE) {
      
      //Update Session 
      if($_SESSION["logged"]){
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["phone"] = $phone;
        $_SESSION["ownapet"] = $ownapet;
        $_SESSION["adoptapet"] = $adoptapet;
        $_SESSION["state"] = $state;
        $_SESSION["city"] = $city;
        $_SESSION["address"] = $address;
      
      }
    } else {
      //echo "Error updating record: " . $conn->error;
    }
}

//My Account - Account Settings
if (isset($_POST['accountsettings'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $updated_at = date('Y-m-d H:i:s');

  $sql = "UPDATE user_master SET username='$username', password='$password', updated_at='$updated_at' WHERE id=".$_SESSION['id'];

  if ($conn->query($sql) === TRUE) {
    
    //Update Session 
    if($_SESSION["logged"]){
      $_SESSION["username"] = $username;
      $_SESSION["password"] = $password;
    }
  } else {
    //echo "Error updating record: " . $conn->error;
  }
}

//Ask a Vet- Create
if (isset($_POST['createaskavet'])) {
  $title = $_POST['title'];
  $content = $_POST['content'];
  //$content = str_replace(str_split("\\/:*'<>|"), ' ', $content);
  $category = $_POST['category'];
  $video = $_POST['video'];
  $status = 'open';
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
      
      // $sql = "INSERT INTO askavet_post(title, content, video, status, user_fk, category_fk) VALUES ('$title', '$content', '$video', 'open', $user_fk, $category_fk)" ;
      
      // if ($conn->query($sql) === TRUE) {

      //     //Last id in blog_post table
      //     $last_id = $conn->insert_id;
  
      //     //Upload photo with last_id name 
      //     $target_dir = "php/uploads/askavet/";
      //     $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      //     $uploadOk = 1;
      //     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

      //     $target_file = "php/uploads/askavet/".$last_id.".".$imageFileType;
      //     if(isset($_FILES['fileToUpload']))
      //     {
      //       move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            
      //       //Image Name with Extension
      //       $image = $last_id.".".$imageFileType;
      //       $sql = "UPDATE askavet_post SET image='$image' WHERE id=$last_id AND user_fk=$user_fk";
      //       if ($conn->query($sql) === TRUE) 
      //       {
      //         redirect_to('petparent/mypost.php');
      //       }
      //     }

      // } else {
      //     //echo "Error: " . $sql . "<br>" . $conn->error;
      // }

      try 
      {

        if($stmt = $conn->prepare("INSERT INTO askavet_post(title, content, video, status, user_fk, category_fk) VALUES (?, ?, ?, ?, ?, ?)")) 
        {
          if(!$stmt->bind_param("ssssii", $title, $content, $video, $status ,$user_fk, $category_fk))
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
          $target_dir = "php/uploads/askavet/";
          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
          $uploadOk = 1;
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

          $target_file = "php/uploads/askavet/".$last_id.".".$imageFileType;
          
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

            $image = $last_id.".".$imageFileType;
            //Update status of document in database
            if(!$stmt = $conn->prepare("UPDATE askavet_post SET image=? WHERE id=? AND user_fk=?"))
            {
              //echo "Table updation failed: (" . $conn->errno . ") " . $conn->error;
            }
            
            if(!$stmt->bind_param('sii', $image, $last_id, $user_fk))
            {
              //echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
            }
            
            if(!$stmt->execute())
            {
              //echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
            }

            redirect_to('petparent/mypost.php');
          }
        }
      
    }
    catch(Exception $e) 
    {  
    }
      

      
}


//Coomunity Forum - Create
if (isset($_POST['createforum'])) {
  $title = $_POST['title'];
  $content = $_POST['content'];
  //$content = str_replace(str_split("\\/:*'<>|"), ' ', $content);
  $category = $_POST['category'];
  $video = $_POST['video'];
  $status = 'open';
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
      
    //   $sql = "INSERT INTO forum_post(title, content, video, status, user_fk, category_fk) VALUES ('$title',  '$content', '$video', 'open', $user_fk, $category_fk)" ;
      
    //   if ($conn->query($sql) === TRUE) {

    //       //Last id in blog_post table
    //       $last_id = $conn->insert_id;
  
    //       //Upload photo with last_id name 
    //       $target_dir = "php/uploads/forum/";
    //       $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    //       $uploadOk = 1;
    //       $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    //       $target_file = "php/uploads/forum/".$last_id.".".$imageFileType;
    //       if(isset($_FILES['fileToUpload']))
    //       {
    //         move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            
    //         //Image Name with Extension
    //         $image = $last_id.".".$imageFileType;
    //         $sql = "UPDATE forum_post SET image='$image' WHERE id=$last_id AND user_fk=$user_fk";
    //         if ($conn->query($sql) === TRUE) 
    //         {
    //           redirect_to('petparent/mypost.php');
    //         }

    //   } else {
    //       //echo "Error: " . $sql . "<br>" . $conn->error;
    //   }
      
    // }

    try 
    {

      if($stmt = $conn->prepare("INSERT INTO forum_post(title, content, video, status, user_fk, category_fk) VALUES (?, ?, ?, ?, ?, ?)")) 
      {
        if(!$stmt->bind_param("ssssii", $title, $content, $video, $status, $user_fk, $category_fk))
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
        $target_dir = "php/uploads/forum/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $target_file = "php/uploads/forum/".$last_id.".".$imageFileType;
        
          move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

          $image = $last_id.".".$imageFileType;
          //Update status of document in database
          if(!$stmt = $conn->prepare("UPDATE forum_post SET image=? WHERE WHERE id=? AND user_fk=?"))
          {
            //echo "Table updation failed: (" . $conn->errno . ") " . $conn->error;
          }
          
          if(!$stmt->bind_param('sii', $image, $last_id, $user_fk))
          {
            //echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
          }
          
          if(!$stmt->execute())
          {
            //echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
          }

          redirect_to('petparent/mypost.php');
        }
      }
    
  }
  catch(Exception $e) 
  {  
  }


}



  //Delete Ask a Vet Post
  if(isset($_POST['deleteaskavet']))
  {
    $askavet_post_id = $_POST['askavet_post_id'];
    $askavet_post_image = $_POST['askavet_post_image'];

    // sql to delete a record
    $sql = "DELETE FROM askavet_post WHERE id=$askavet_post_id";

    if ($conn->query($sql) === TRUE) {
       
      //Delete Old Image
      if(!empty($askavet_post_image))
        unlink( "php/uploads/askavet/".$askavet_post_image);

      redirect_to('petparent/mypost.php');

    } else {
           
          }  
  }

  //Edit Ask a Vet Post
  if(isset($_POST['editaskavet']))
  {
    $askavet_post_id = $_SESSION['askavet_edit_id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $content = str_replace(str_split("\\/:*'<>|"), ' ', $content);
    $category = $_POST['category'];
    $video = $_POST['video'];
    $image = $_SESSION['askavet_edit_image'];
    $updated_at = date('Y-m-d H:i:s');

    $sql_e = "SELECT * FROM blog_categories WHERE name='$category'";
    $result_blog_categories = $conn->query($sql_e);
    if($result_blog_categories->num_rows > 0)
    {
      while($blog_categories = $result_blog_categories->fetch_assoc()) {
        $category_fk = $blog_categories['id'];
        }  

    }

    $user_fk = $_SESSION['id'];

    $sql = "UPDATE askavet_post SET title='$title', content='$content', video='$video', category_fk='$category_fk', updated_at='$updated_at'  WHERE id=$askavet_post_id AND user_fk=$user_fk";

    if ($conn->query($sql) === TRUE) {

      if(!($_FILES['fileToUpload']['error'] > UPLOAD_ERR_OK))
      {
      //Last id in blog_post table
      $last_id = $askavet_post_id;
    
      //Upload photo with last_id name 
      $target_dir = "php/uploads/askavet/";

        //Delete Old Image
      if(!empty($image))
        //unlink( $target_dir."".$image);

      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

      $target_file = $target_dir."".$last_id.".".$imageFileType;
      
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

        //Image Name with Extension
        $image = $last_id.".".$imageFileType;
        $sql = "UPDATE askavet_post SET image='$image' WHERE id=$askavet_post_id AND user_fk=$user_fk";
        if ($conn->query($sql) === TRUE) 
        {
          redirect_to('petparent/mypost.php');
        }
      }  
    
    } else {
      //echo "Error updating record: " . $conn->error;
    }
}


//Edit Ask a Vet Button
if(isset($_POST['editaskavetbtn']))
{
  $_SESSION['askavet_edit_id'] = $_POST['askavet_edit_id'];
  $_SESSION['askavet_edit_title'] = $_POST['askavet_title'];
  $_SESSION['askavet_edit_content'] = $_POST['askavet_content'];
  $_SESSION['askavet_edit_category'] = $_POST['askavet_category_name'];
  $_SESSION['askavet_edit_video'] = $_POST['askavet_video'];
  $_SESSION['askavet_edit_image'] = $_POST['askavet_image'];

  redirect_to('petparent/editaskavet.php');
}


//Delete Forum Post
if(isset($_POST['deleteforum']))
{
  $forum_post_id = $_POST['forum_post_id'];

  // sql to delete a record
  $sql = "DELETE FROM forum_post WHERE id=$forum_post_id";

  if ($conn->query($sql) === TRUE) {
    
    redirect_to('petparent/mypost.php');

  } else {
         
        }  
}

//Edit Forum Post
if(isset($_POST['editforum']))
{
  $askavet_post_id = $_SESSION['forum_edit_id'];
  $title = $_POST['title'];
  $content = $_POST['content'];
  $content = str_replace(str_split("\\/:*'<>|"), ' ', $content);
  $category = $_POST['category'];
  $video = $_POST['video'];
  $image = $_SESSION['forum_edit_image'];
  $updated_at = date('Y-m-d H:i:s');

  $sql_e = "SELECT * FROM blog_categories WHERE name='$category'";
  $result_blog_categories = $conn->query($sql_e);
  if($result_blog_categories->num_rows > 0)
  {
    while($blog_categories = $result_blog_categories->fetch_assoc()) {
      $category_fk = $blog_categories['id'];
      }  

  }

  $user_fk = $_SESSION['id'];

  $sql = "UPDATE forum_post SET title='$title', content='$content', video='$video', category_fk='$category_fk', updated_at='$updated_at'  WHERE id=$forum_post_id AND user_fk=$user_fk";

  if ($conn->query($sql) === TRUE) {

    if(!($_FILES['fileToUpload']['error'] > UPLOAD_ERR_OK))
    {
    //Last id in blog_post table
    $last_id = $forum_post_id;
  
    //Upload photo with last_id name 
    $target_dir = "php/uploads/forum/";

      //Delete Old Image
      //unlink( $target_dir."".$image);

    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $target_file = $target_dir."".$last_id.".".$imageFileType;
    
      move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

      //Image Name with Extension
      $image = $last_id.".".$imageFileType;
      $sql = "UPDATE forum_post SET image='$image' WHERE id=$forum_post_id AND user_fk=$user_fk";
      if ($conn->query($sql) === TRUE) 
      {
        redirect_to('petparent/mypost.php');
      }
    }  
  
  } else {
    //echo "Error updating record: " . $conn->error;
  }
}


//Edit Forum Button
if(isset($_POST['editforumbtn']))
{
$_SESSION['forum_edit_id'] = $_POST['forum_edit_id'];
$_SESSION['forum_edit_title'] = $_POST['forum_title'];
$_SESSION['forum_edit_content'] = $_POST['forum_content'];
$_SESSION['forum_edit_category'] = $_POST['forum_category'];
$_SESSION['forum_edit_video'] = $_POST['forum_video'];
$_SESSION['forum_edit_image'] = $_POST['forum_image'];

redirect_to('petparent/editforum.php');
}


//Upload User Image
if(isset($_POST['userimageupload']))
{
  if(!($_FILES['userimage']['error'] > UPLOAD_ERR_OK))
        {
        //Id of user
        $last_id = $_SESSION['id'];
      
        //Upload photo with last_id name 
        $target_dir = "php/uploads/user/";

          //Delete Old Image
          if(!empty($_SESSION['image']))
            //unlink( $target_dir."".$_SESSION['image']);

        $target_file = $target_dir . basename($_FILES["userimage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $target_file = $target_dir."".$last_id.".".$imageFileType;
        
          move_uploaded_file($_FILES["userimage"]["tmp_name"], $target_file);

          //Image Name with Extension
          $image = $last_id.".".$imageFileType;
          $sql = "UPDATE user_master SET image='$image' WHERE id=$last_id";
          if ($conn->query($sql) === TRUE) 
          {
            $_SESSION['image'] = $image;
            redirect_to('petparent/myaccount.php');
          }
        }
}  


//Read More button of Ask a Vet
if (isset($_POST['readmoreaskavet'])) {

  $_SESSION['askavet_id'] = $_POST['askavet_id'];
  $_SESSION['askavet_author_name'] = $_POST['askavet_author_name'];
  $_SESSION['askavet_author_image'] = $_POST['askavet_author_image'];
  $_SESSION['askavet_title'] = $_POST['askavet_title'];
  $_SESSION['askavet_content']  = $_POST['askavet_content'];
  $_SESSION['askavet_category_name'] = $_POST['askavet_category_name'];
  $_SESSION['askavet_video'] = $_POST['askavet_video'];
  $_SESSION['askavet_status'] = $_POST['askavet_status'];
  $_SESSION['askavet_created_at'] = $_POST['askavet_created_at'];
  
  redirect_to('forumdetail.php');
  
}


//Read More button of Forum
if (isset($_POST['readmoreforum'])) {

  $_SESSION['forum_id'] = $_POST['forum_id'];
  $_SESSION['forum_author_name'] = $_POST['forum_author_name'];
  $_SESSION['forum_author_image'] = $_POST['forum_author_image'];
  $_SESSION['forum_title'] = $_POST['forum_title'];
  $_SESSION['forum_description'] = $_POST['forum_description'];
  $_SESSION['forum_content']  = $_POST['forum_content'];
  $_SESSION['forum_category_name'] = $_POST['forum_category_name'];
  $_SESSION['forum_video'] = $_POST['forum_video'];
  $_SESSION['forum_status'] = $_POST['forum_status'];
  $_SESSION['forum_created_at'] = $_POST['forum_created_at'];
  
  redirect_to('communityforumdetail.php');
  
}
?>