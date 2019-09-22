<?php 

    if(isset($_POST['check']) && isset( $_POST['sign-in'])){
        $name= $_POST['name'];
        $email=$_POST['email'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }else $email= validateInput($_POST['email']);

        $password= trim($_POST['password']);
        if(!empty($_POST['gender'])){
                $gender=$_POST['gender'];
        }

        if($email=='skyfalljoss@gmail.com' && $password=='123'){
            header('Location: https://mail.google.com/');
        }
        else header('Location: index.php');
     } else header('Location: index.php');

     function validateInput($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
?>   