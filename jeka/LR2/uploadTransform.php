<?php


$dir = "img";
if(!is_dir($dir)) {
    mkdir($dir, 0777, true);
}
if (isset($_POST['upload'])) {
    echo 'qwe';
    $connect = mysqli_connect('localhost', 'root', '', 'lr2');
    if (!empty($_FILES['file'])) {

        $file = $_FILES['file'];
        $pathFile = $file['name'];

        if (!move_uploaded_file($file['tmp_name'], $pathFile)) {
            echo 'Что-то не так';
        } else {
            $post = $_POST['post'];
            $desc = $_POST['desc'];
            $cost = $_POST['cost'];
            $name = $_POST['name'];

            $selectMaxId = mysqli_query($connect, "select MAX(id) from `facture`");
            $fetchId = mysqli_fetch_assoc($selectMaxId);
            $id = $fetchId['MAX(id)'] + 1;

            mysqli_query($connect, "select `name` from `reg` where `name`='$post'");
            echo mysqli_affected_rows($connect);
            if (mysqli_affected_rows($connect) >= 1) {
                $selectIdPost = mysqli_query($connect, "select `id` from `reg` where `name` = '$post'");
                $fetchId = mysqli_fetch_assoc($selectIdPost);
                $regId = $fetchId['id'];
                $id_region = mysqli_fetch_assoc($selectIdPost);
                echo $regId;
                mysqli_query($connect, "INSERT INTO `facture`(`id`,`name`,`id_region`,`description`,`money`,`path`)values('$id','$name','$regId','$desc','$cost','$pathFile')");
            } else {
                $selectMaxId = mysqli_query($connect, "select MAX(id) from `reg`");
                $fetchId = mysqli_fetch_assoc($selectMaxId);
                $regId = $fetchId['MAX(id)'] + 1;
                mysqli_query($connect, "INSERT INTO `reg`(`id`,`name`)values('$regId','$post')");
                mysqli_query($connect, "INSERT INTO `facture`(`id`,`name`,`id_region`,`description`,`money`,`path`)values('$id','$name','$regId','$desc','$cost','$pathFile')");
            }
            header('Location:/lr2/cait.php');
        }
    }
}
