<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM media WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $type = $data['type'];
        $status = $data['status'];
        $image = $data['image'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
$notStatus = '';
if ($status == "available") {
    $notStatus = "reserved";
} else {
    $notStatus = "available";
}

$notType = '';
if ($type == "dvd") {
    $notType = "book";
} else {
    $notType = "dvd";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Media</title>
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

            <legend class='h2 bg-dark text-light text-center p-3  mt-3 '>Update request<img class='img-thumbnail rounded' src='images/<?php echo $image ?>' alt="<?php echo $title ?>"></legend>

            <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
                <table class="table table-hover">
                    <tr>
                        <th>Title</th>
                        <td><input class="form-control" type="text" name="title" placeholder="Shawshank Redemption" value="<?php echo $title ?>" /></td>
                    </tr>
                    <tr>
                        <th>Type</th>

                        <td>
                            <select class="form-select" name="type">
                                <option selected value="<?php echo $type ?>"><?php echo $type ?></option>
                                <option value="<?php echo $notType ?>"><?php echo $notType ?></option>
                            </select>

                        </td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            <select class="form-select" name="status">
                                <option selected value="<?php echo $status ?>"><?php echo $status ?></option>
                                <option value="<?php echo $notStatus ?>"><?php echo $notStatus ?></option>

                            </select>

                        </td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td><input class="form-control" type="file" name="image" /></td>
                    </tr>
                    <tr>
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
                        <input type="hidden" name="image" value="<?php echo $data['image'] ?>" />
                        <td><a href="index.php"><button class="btn btn-success" type="button">Back</button></a></td>
                        <td><button class="btn btn-primary" type="submit">Save Changes</button></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
</body>

</html>