<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php echo $_SERVER["PHP_SELF"] ?>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <img src="./bootstrap-solid.svg" alt="bootstrap" height="75px" width="75px">
        </div>
        <div class="row d-flex justify-content-center">
            <h3> Pleasse sign in</h3>
        </div>  
        <div class=" row d-flex justify-content-center">
            <form action="./login.php" class="col-4" method="POST">
                <div  class="form-group ">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    <input type="email" class="form-control my-3" id="email" name="email" placeholder="Email address">
                    <input type="password" class="form-control" id="password" name="password" placeholder="password">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male" checked>
                    <label class="form-check-label mr-4" for="male">Male</label>
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
                <div class=" form-group form-check ">
                    <input type="checkbox" name ="check"class="form-check-input" id="remember"><label for="remember" class="form-check-label">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name ="sign-in">Sign in</button>
                <p class="text-muted text-center mt-20px">© 2017-2019</p>
            </form>
        </div>        
    </div>

</body>
</html>