<?php
 include 'includes/dbh.inc.php';
 $email = "";
 $emailErr = "";
 $emailsuc = "";


 if(isset($_POST['submit'])){
 
 
     $email = $_POST['email'];
 
     if (empty($_POST['email'])){
         $_SESSION['error'] = "Email is required";
         header("location:index.php");
         die();
     }else{
         if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $_SESSION['error'] = "Invalid Email";
            header("location:index.php");
            die();
     }elseif(!empty($_POST['email']) && filter_var($email, FILTER_VALIDATE_EMAIL)){
          $sql = "INSERT INTO email (email) VALUES ('$email')";
 if ( $conn->query($sql)){
     // echo "New record created successfully";
      $_SESSION['success'] = "You'll be notified shortly :)";
      header("location:index.php");
      die();
 }else{
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     header("location:index.php");
     die();
 }
     }
     else{
          $_SESSION['success'] = "Valid Email";
          header("location:index.php");
          die();
     }
     }
    
 }


 
 ?>