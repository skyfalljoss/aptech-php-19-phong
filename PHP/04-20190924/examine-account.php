<?php include 'header.php';?>

<?php
    include "connect.php";
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql_select='SELECT * FROM bang where email = :email AND password = :password';
        $stmt =$conn->prepare($sql_select);
        $stmt->bindValue(':email',$email,PDO::PARAM_STR);
        $stmt->bindValue(':password',$password,PDO::PARAM_STR);
        $stmt->execute();
        $stmt->setFetchMode (PDO::FETCH_ASSOC);
        $r=$stmt->fetchAll();
        $count=$stmt->rowCount();
        if($count >0){
            //echo "<h1>ok</h1>";
            header("Location: http://google.com");
        }else {
            $errors[]='failed';
        }
    }
?>
<div class="container">
    <div class="row">
        <div class="offset-1 col-6 mt-5">
            <form action="" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    <?php 
                    if(!empty($errors)){
                        echo "<b class='text-danger'>login failed</b>";
                    }
                    ?>
                </div>
                <button type="submit" class="btn btn-primary" name="login">Login</button>
            </form>
        </div>
    </div>
</div>
<?php  include "footer.php"?>