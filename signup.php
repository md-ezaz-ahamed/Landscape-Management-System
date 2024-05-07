<?php
include 'connect.php';
if (isset($_POST['outMail']) && isset($_POST['outPass']) && isset($_POST['outName'])) {
   
    if (isset($_POST['signUp'])) {

        $email = $_POST['outMail'];
        $password = $_POST['outPass'];
        $name = $_POST['outName'];

        $sql = "INSERT INTO user_t (email,password,name) 
               VALUES('$email','$password','$name')";
        mysqli_query($conn, $sql);
        echo "<script>window.location.href ='index.html'</script>";

    }
}
