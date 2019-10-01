<?php
    include 'header.php';
    include "connect.php";
    if(isset($_POST['insert'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $name=$_POST['name'];

        $sql_selected='SELECT * FROM bang WHERE email=:email';
        $stmt =$conn->prepare($sql_selected);
        $stmt->bindValue(':email',$email, PDO::PARAM_STR);
        $stmt->execute();

        $count=$stmt->rowCount();
        if($count>0){
            $errors[]='exist';
        }
        else
        {
            $sql_ins='INSERT INTO bang (email,password,name)
            VALUES (:email,:password,:name)';
            $stmt =$conn->prepare($sql_ins);
            $stmt->bindValue(':name',$name, PDO::PARAM_STR);
            $stmt->bindValue(':email',$email, PDO::PARAM_STR);
            $stmt->bindValue(':password',$password, PDO::PARAM_STR);
            $stmt->execute();
             
        }        
        
    }
?>
<div class="container">
    <div class="row">
        <div class="offset-1 col-6 mt-5">
            <form action="" method="post">
            <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <?php if(!empty($errors) && isset($_POST['insert'])){
                    echo "<b class='text-danger'>Email alreay exist</b><br>";
                }else if(isset($_POST['insert'])){
                    echo "<b class='text-success'>Sign up success</b>";
                }
               ?>
                <button type="submit" class="btn btn-primary mt-2" name="insert">Sign up</button>
            </form>
        </div>
    </div>
</div>