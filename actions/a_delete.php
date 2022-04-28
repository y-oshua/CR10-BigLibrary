<?php
require_once 'db_connect.php';

if ($_POST) {
    $id = $_POST['id'];
    $image = $_POST['image'];
    ($image == "media.png") ?: unlink("../images/$image");

    $sql = "DELETE FROM media WHERE id = {$id}";
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "Successfully Deleted!";
    } else {
        $class = "danger";
        $message = "The entry was not deleted due to: <br>" . $connect->error;
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">>
    <title>Delete</title>
    <?php require_once '../components/boot.php' ?>
</head>

<body>
    <div class="container-fluid bg-light mx-auto">
        <div class="mt-3 mb-3">
            <h1>Delete request response</h1>
        </div>
        <div class="alert alert-<?= $class; ?>" role="alert">
            <p><?= $message; ?></p>
            <a href='../index.php'><button class="btn btn-success" type='button'>Back</button></a>
        </div>
    </div>
</body>

</html>