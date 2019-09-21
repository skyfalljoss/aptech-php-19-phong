<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    

<?php 
    var_dump( 3 + 3.3);
    $products=[
        "iphone 11"=>[
            'price'=>1099,
            'made'=>[
                'in'=>'china',
                'by'=>'california'
            ]
        ],
        "note 9"=>[
            'price'=>1099,
            'made'=>[
                'in'=>'Viet Nam',
                'by'=>'Korean'
            ]
        ],
        "note 10"=>[
          'price'=>1099,
          'made'=>[
              'in'=>'Viet Nam',
              'by'=>'Korean'
          ]
      ],
      
        "sale at"=>'namcoi.com'
    ];
    echo "<h1> Mua tai:".$products['sale at']."</h1>";
    $arr=(array_keys($products));
    var_dump(count($products)-1);

?>
<table class="table" style="width: calc(100% - 200px); margin-left:100px">
  <thead>
    <tr>
      <th scope="col">Tên sp</th>
      <th scope="col">Price</th>
      <th scope="col">Made in</th>
      <th scope="col">Made by</th>
    </tr>
  </thead>
  <tbody>
  <?php  
    $total=0;$total1=0;
    //Foreach
    foreach($products as $k => $v){
    
     if($k!="sale at"){
      $total+= $v['price']; 

  ?>
  <tr>
      <th scope="row"><?php echo $k;?></th>
      <td><?php echo $v['price'];?></td>
      <td><?php echo $v['made']['in'];?></td>
      <td><?php echo $v['made']['by'];?></td>
    <?php 
  }  else continue;?>
</tr>
  <?php }?>
  <tr>
    <th scope="row"><?php echo "Tổng";?></th>
    <td><?php echo $total;?></td>
    <td></td>
    <td></td>
  </tr>
        <!--For -->
      <?php
      for($i=0;$i<count($products)-1 ; $i++){
        $total1 += $products[$arr[$i]]['price']; 
      ?>
      <tr>
      <th scope="row"><?php echo $arr[$i];?></th>
      <td><?php echo $products[$arr[$i]]['price'];?></td>
      <td><?php echo $products[$arr[$i]]['made']['in'];?></td>
      <td><?php echo $products[$arr[$i]]['made']['by'];?></td>
      </tr>  
      <?php }?>
      <tr>
        <th scope="row"><?php echo "Tổng";?></th>
        <td><?php echo $total1;?></td>
        <td></td>
        <td></td>
      </tr>

  </tbody>
</table>
</body>
</html>