<?php
require_once "../include/db_connect.php";

if($_POST['param']=='check_email'){
    $email = $_POST['emailid'];
    $password = $_POST['password'];

    $sql_e = "SELECT * FROM users WHERE email='$email'";
    $res_e = mysqli_query($conn, $sql_e);

    if(mysqli_num_rows($res_e) > 0)
    {

        $email_error = "Sorry this account already exits please try again"; 	
        echo $email_error;
        // header("Location : login.php");
    }

    
}
?>

<script>
        $(document).ready(function(){
            $("#email").on("blur",function(){
                $("#warning").load("php/ajax_call.php",{'param':'check_email','emailid':$("#email").val(),'password':$("#passsword").val()});
            });
        });
    </script>