<?php require 'header.php'?>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="fileUpload" id="uploadFile"/>
        <input type="submit" name="submit"/>
    </form>
    <div id="image_preview">   
    </div>
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
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);// getimagesize lay kich thuoc file
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
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
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $targetFile)) {
                echo "The file ". basename( $_FILES["fileUpload"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
?>

<?php include 'footer.php'?>