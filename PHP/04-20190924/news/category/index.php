<?php 
    include '../header.php';
    include 'connect.php';
    $sql_selected='SELECT * FROM  news';
    $stmt= $conn->prepare($sql_selected);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result= $stmt->fetchAll();
?>
<div class="container my-5">
    <div class="row">
    <?php foreach ($result as $k => $v){?>
        <div class="col-12 col-md-4">
            <div class="card my-3" style="width: 18rem; height:26rem;">
                <img src="<?php echo $v['link_img']?>" class="card-img-top" style="height:14rem" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $v['title']?></h5>
                    <p class="card-text"><?php echo $v['des']?></p>
                    <a href="#" class="btn btn-outline-primary px-4">Go somewhere </a>
                </div>
            </div>
        </div>
    <?php }?>    
    </div>
</div>
<?php include '../footer.php'?>