<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {
    $title = $_POST['title']; // attribute "title" from update.php form
    $type = $_POST['type'];
    $status = $_POST['status'];
    $id = $_POST['id'];
    //variable for upload images errors is initialised
    $uploadError = '';

    $image = file_upload($_FILES['image']); //file_upload() called  
    if ($image->error === 0) {
        ($_POST["image"] == "media.png") ?: unlink("../images/$_POST[image]"); // unlink deletes old image, also refers to the "name" attribute       
        $sql = "UPDATE media SET title = '$title', type = '$type', status = '$status', image = '$image->fileName' WHERE id = {$id}";
    } else {
        $sql = "UPDATE media SET title = '$title', type = '$type', status = '$status' WHERE id = {$id}";
    }
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($image->error != 0) ? $image->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
        $uploadError = ($image->error != 0) ? $image->ErrorMessage : '';
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update media</title>
    <?php require_once '../components/boot.php' ?>
</head>

<body>
    <div class="container-fluid bg-light mx-auto">
        <div class="mt-3 mb-3">
            <h1>Update request response</h1>
        </div>
        <div class="alert alert-<?php echo $class; ?>" role="alert">
            <p><?php echo ($message) ?? ''; ?></p>
            <p><?php echo ($uploadError) ?? ''; ?></p>
            <a href='../index.php'><button class="btn btn-success" type='button'>Back</button></a>
        </div>
    </div>
</body>

</html>