<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {
    $title = $_POST['title'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $uploadError = '';
    //this function exists in the service file upload.
    $image = file_upload($_FILES['image']);  // this function is stored in file_upload.php

    $sql = "INSERT INTO media(title, image, type, description, status) VALUES ('$title', '$image->fileName', '$type', '$description', '$status')";

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The media item below was successfully created! <br>
            <table class='table w-50'><tr>
            <td> $title </td>
            <td> $type </td>
            <td> $description </td>
            <td> $status </td>
            </tr></table><hr>";
        $uploadError = ($image->error != 0) ? $image->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while creating media item. Please try again. <br>" . $connect->error;
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
    <title>Add Media</title>
    <?php require_once '../components/boot.php' ?>
</head>

<body>
    <div class="container-fluid bg-light mx-auto">
        <div class="mt-3 mb-3">
            <h1>Create request response</h1>
        </div>
        <div class="alert alert-<?= $class; ?>" role="alert">
            <p><?php echo ($message) ?? ''; ?></p>
            <p><?php echo ($uploadError) ?? ''; ?></p>
            <a href='../index.php'><button class="btn btn-success" type='button'>Back</button></a>
        </div>
    </div>
</body>

</html>