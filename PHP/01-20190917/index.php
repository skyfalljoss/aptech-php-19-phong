<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>

    <?php 
        echo "<h1>Hello world!!!</h1>";
            //~~~~~~~~~~~~~~~
             /*~~~~~~~~~~~
             ~~~*/
        $myName='Nguyen Van Phong';
        $myProject='My Project';
        //echo print print_R
        echo $myName."---".$myProject. "<br>";
        print $myProject."<br>";
        print_r ($myProject."--");
        //constant
        define ("myName1","Phong", true);
        echo myName1;
       /*define ("myName1","Phong123", true);//error
        echo myName1;*/
        
        $str="aa";
        $a=1;
        $b=2;
        $float=1.3;
        $bool=true;
        $arr=[1,"2","ba"];
        
        echo $str.$a.$b.$float.$bool."<br>";
        echo $arr[1]."<br>";
        echo $a*$b.$a+$b.$a-$b.$b/$a.$a%$b."<br>";
        $c=++$a + $b--;
        $b+=$a;
        if($a>$b) {
            echo $a;
        }else echo $b;
        
        //switch case
        $language="PHP";
        switch($language)
        {
            case 'PHP':
                echo "La PHP";break;
            case 'JS':
                echo "La JS";break;   
            default:
                echo "123";
        }

        //while
        $i=0;
        while($i<5){
                echo $i;
                $i++;
        }
        echo "<br>";

        //do while
        $i = 0;
         do {
         echo $i;
         $i++;
         } while ($i < 5);
        echo "<br>";

         //for
        for ($i = 0; $i <5; $i++) {
            echo $i;
        }

        //foreach
        $array = ["name" => "Phong", "class" => "PHP", "age" => 20];
        foreach($array as $k =>$v){
            echo $k.":".$v."<br>";
        }

        //function
        function display($x){
            echo $x;
        }   

        $arr1 = [30,21,1,5,8,22,18];
        sort ($arr1);
        print_r ($arr1);
        
        foreach($arr1 as $k =>$v){
            echo $k.":".$v."<br>";
        }

        //superglobals
        echo "____________________________<br>";
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        //echo $_SERVER['HTTP_REFERER'];
        //echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
        echo "<br>";
        //end superglobals
        ?>
        

    <!-- table -->
<table class="table">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">age</th>
                <th scope="col">post_quantity</th>
                </tr>
            </thead>
            <tbody>
            
       <?php
       
       $authors = [
            [
            "name" => "Lorem",
            "age" => "18",
            "post_quantity" => "5",
            ],
            [
            "name" => "A",
            "age" => "18",
            "post_quantity" => "4",
            ],
            [
                "name" => "B",
                "age" => "20",
                "post_quantity" => "3",
            ],
            [
                "name" => "C",
                "age" => "21",
                "post_quantity" => "11",
            ],
            [
                "name" => "D",
                "age" => "21",
                "post_quantity" => "15",
            ],
            [
                "name" => "E",
                "age" => "21",
                "post_quantity" => "7",
            ],
            ];

            foreach ($authors as $k=>$v){
            
    ?>
       
            <tr>
                <td><?php  echo $v["name"];?></td>
                <td><?php  echo $v["age"];?></td>
                <td><?php  echo $v["post_quantity"];?></td>
            </tr>
            <?php }?>
        </tbody>
        </table>    
          <!--end tables-->  
</body>
</html>