<?php
// Signup Form
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_e = "SELECT * FROM user_master WHERE email='$email'";
    $res_e = mysqli_query($conn, $sql_e);

    if(mysqli_num_rows($res_e) > 0)
    {

        $user_already_registered_error = "Sorry this account already exists please try again"; 	
        //Redirect user to login.php again
        //header("Location: login.php");
    }
    
    else
    {

        $sql = "INSERT INTO user_master(username, email, password, role) VALUES ('".$_POST['username']."','".$_POST['email']."','".$_POST['password']."', 'Pet Parent')" ;
        
        if ($conn->query($sql) === TRUE) {
            redirect_to("petparent/login.php");

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        exit();
    }
}


?>

