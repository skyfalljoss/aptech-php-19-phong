<?php include '../header.php'?>
<?php 
    include 'connect.php';
    $sql_selected='SELECT * FROM category';
    $stmt =$conn->prepare($sql_selected);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result= $stmt->fetchAll();
?>
<div class="container mt-5">
    <div class="row">
        <div class=" offset-2 col-8">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <input class="form-control" type="text" name="title" id="" placeholder='title'/>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="des" id="" placeholder='description'/>
                </div>    
                <div class="form-group">
                    <textarea class="form-control" type="text" name="content" id="" placeholder='content'></textarea>
                </div> 
                <div class="input-group mb-3">
                    <select class="custom-select" name="categories_id" id="">
                        <option value=''>Categories</option>
                    <?php foreach($result as $k => $v){?>
                        <option value="<?php echo $v['id']?>"><?php echo $v['categories']?></option>
                    <?php }?>
                    </select>
                </div>  
                <div class="form-group">
                    <input class="form-control-file" type="file" name="fileUpload" id="uploadFile"/>
                </div>
                <button type="submit" class="btn btn-primary px-4" name="submit">Add</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="offset-2 col-8">
            <div id="image_preview"></div>
        </div>
    </div>
</div>
    
    <!--   --->
    <script>
        $("#uploadFile").change(function(){
            $('#image_preview').html("");
            var total_file=document.getElementById("uploadFile").files.length;
            for(var i=0;i<total_file;i++)
            {
            $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"' class='img-thumbnail' width='150px'>");
            }
        });
    </script>

<?php 
    if(isset($_POST['submit'])&& isset($_FILES['fileUpload'])){
        
        $targetDirectory="./uploads/";
        // kiem tra folder $tarDirectory( folder: uploads) ton tai chua -- neu chua tao file $targetDirectory
        if (!file_exists($targetDirectory)) {
            mkdir($targetDirectory, 0777, true);
        }
        $targetFile = $targetDirectory.basename($_FILES['fileUpload']['name']);
        $uploadOK = 0;
        // strtolower chuyen hoa->thuong
        // pathinfo($targetfile, $option)  PATHINFO_EXTENSION lay phan mo rong
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        if(isset($_POST["submit"])&& isset($_FILES['fileUpload'])) {
            $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);// getimagesize lay kich thuoc file
            if($check !== false) {
                echo " <p class='text'>File is an image - " . $check["mime"] . ".</p>";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        if ($_FILES["fileUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        if (!preg_match("/(gif|jpe?g|tiff|png)$/i", $imageFileType)) {
            echo "Only GIF, JPG, JPEG, TIFF & PNG files are allowed";
            $uploadOk = 0;
        }
        var_dump($uploadOK);
        if ($uploadOk == 0) {
            echo "<p class='text-danger'>Sorry, your file was not uploaded.</p>";
        } else {
            if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $targetFile)) {
                echo "<p class='text-success'>The file ". basename( $_FILES["fileUpload"]["name"]). " has been uploaded.</p></br>";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        $title=$_POST['title'];
        $des=$_POST['des'];
        $content=$_POST['content'];
        $category_id=$_POST['categories_id'];
        $sql_ins='INSERT INTO news (title,des,content,link_img,category_id)
        VALUES (:title,:des,:content,:link_img,:category_id)';
        $stmt =$conn->prepare($sql_ins);
        $stmt->bindValue(':title',$title, PDO::PARAM_STR);
        $stmt->bindValue(':content',$content, PDO::PARAM_STR);
        $stmt->bindValue(':des',$des, PDO::PARAM_STR);
        $stmt->bindValue(':link_img',$targetFile, PDO::PARAM_STR);
        $stmt->bindValue(':category_id',$category_id, PDO::PARAM_INT);
        $stmt->execute();
    }
?>

<?php include '../footer.php'?>
