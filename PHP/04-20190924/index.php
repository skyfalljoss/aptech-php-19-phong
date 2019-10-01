<?php include 'header.php'; 
    include 'connect.php';

    $sql_select = "SELECT * FROM bang";
    $stmt = $conn->prepare($sql_select);
    $stmt->execute();
    $stmt->setFetchMode (PDO::FETCH_ASSOC);
    $r=$stmt->fetchAll();
    
?>
<div class="container">
    <div class="row">
      <div class="offset-1 col-6 mt-5">
          <table class="table table-striped table-dark">
              <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
              </tr>
              </thead>
              <tbody>
              <?php foreach($r as $k => $v){?>
              <tr>
                <th scope="row"><?php echo $v['id']?></th>
                <td><?php echo $v['name']?></td>
                <td><?php echo $v['email']?></td>
                <td><?php echo $v['password']?></td>
              </tr>
              <?php  }?>
              </tbody>
          </table>
      </div>
  </div>
</div>

<?php include 'footer.php'?>