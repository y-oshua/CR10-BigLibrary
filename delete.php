<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM media WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 1) {
        $title = $data['title'];
        $type = $data['type'];
        $description = $data['description'];
        $status = $data['status'];
        $image = $data['image'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Media</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
        .img-thumbnail {
            width: 60px !important;
            height: 90px !important;
            object-fit: cover;
            position: relative;
            left: 30px;
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-light mx-auto">

        <fieldset class="w-75 mt-3 mx-auto">

            <legend class='h2 bg-dark text-light text-center p-3  mt-3 '>Delete request<img class='img-thumbnail rounded' src='images/<?php echo $image ?>' alt="<?php echo $title ?>"></legend>

            <h5>You have selected the following media item:</h5>
            <table class="table table-hover w-75 mt-3">
                <tr>
                    <th>Title</th>
                    <td><?php echo $title ?></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td><?php echo $type ?></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><?php echo $description ?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td><?php echo $status ?></td>
                </tr>
            </table>

            <h3 class="mb-4">Do you really want to delete <em><?php echo $title ?></em>?</h3>
            <form action="actions/a_delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>" />
                <input type="hidden" name="image" value="<?php echo $image ?>" />
                <a href="index.php"><button class="btn btn-success" type="button">Back</button></a>
                <button class="btn btn-danger" type="submit">Delete</button>

            </form>
        </fieldset>
    </div>
</body>

</html>