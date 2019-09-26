<?php
    include 'header.php';
    include "connect.php";
    if(isset($_POST['insert'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql_ins='INSERT INTO bang (email,password)
        VALUES (:email,:password)';
        $stmt =$conn->prepare($sql_ins);
        $stmt->bindValue(':email',$email, PDO::PARAM_STR);
        $stmt->bindValue(':password',$password, PDO::PARAM_STR);
        $stmt->execute();
        echo "<h3 class='text-success'>Insert thanh cong</h3>";
    }
?>
<form action="" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="insert">    Insert</button>
</form>