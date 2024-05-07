<?php
include 'connect.php';
session_start();

if (isset($_POST['inMail']) && isset($_POST['inPass'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $mail = validate($_POST['inMail']);
    $pass = validate($_POST['inPass']);
    if (isset($_POST['signIn'])) {


        $email = $_POST['inMail'];
        $password = $_POST['inPass'];

        if ($email == 'admin@gmail.com' && $password == 'admin') {
            $_SESSION['name'] ="admin";
            echo "<script>window.location.href ='admin-homepage.php'</script>";
            // header('admin-homepage.html');
            exit();
        } 
        elseif ($email != NULL && $password != NULL) {
            $sql = "SELECT * from user_t where email='$email' and password='$password'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            if (mysqli_num_rows($result) === 1) {
                if ($row['email'] === $email && $row['password'] === $password) {
                    $_SESSION['email'] = $email;
                    $_SESSION['name'] = $row['name'];

                    echo "<script>window.location.href ='homepage.php'</script>";
                    //header('');
                    exit();
                }
            }
        }
    }
}
