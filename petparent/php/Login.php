<?php
//Login Form
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

  $sql_e = "SELECT * FROM user_master WHERE email='$email' and password='$password' and role='Pet Parent'";
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
          $_SESSION["image"] = $row["image"]; 
          
        }        
        
        //Redirect user to dashboard
        redirect_to('petparent/myaccount.php');
            exit();
        
        }else{

        $user_login_error = "Invalid login credentials. Please try again."; 
        
    }
}


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
      redirect_to('blogger/userbloglist_all.php');
            exit();
      
      }else{

      $user_login_error = "Invalid login credentials. Please try again."; 
      
  }
}
?>