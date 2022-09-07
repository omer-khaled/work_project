<?php
    if(isset($_POST['img_submit']) && $_POST['passs']=="admin"  && isset($_FILES['img_upload']['name']) ){
        $img_name=$_FILES['img_upload']['name'];
        $tmp_img_name=$_FILES['img_upload']['tmp_name'];
        $folder='images/products/';
        
        print($folder.$img_name);
        print($tmp_img_name);
        move_uploaded_file($tmp_img_name,$folder.$img_name);
    }
?>