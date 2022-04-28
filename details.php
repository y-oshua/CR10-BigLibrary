<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM media WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $description = $data['description'];
        $type = $data['type'];
        $status = $data['status'];
        $image = $data['image'];
        $isbn = $data['isbn'];
        $author_fname = $data['author_fname'];
        $author_lname = $data['author_lname'];
        $publisher = $data['publisher'];
        $publisher_city = $data['publisher_city'];
        $publish_date = $data['publish_date'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
$bookTable = "";

if ($type == "book") {
    $bookTable = "                

    <tr>
        <th>ISBN</th>
        <td>$isbn</td>
    </tr>
    <tr>
        <th>Author</th>
        <td>$author_fname $author_lname</td>
    </tr>
    <tr>
        <th>Publisher</th>
        <td>$publisher</td>
    </tr>
    <tr>
        <th>City of Publisher</th>
        <td>$publisher_city</td>
    </tr>
    <tr>
    <th>Publish Date</th>
    <td>$publish_date</td>
</tr>";
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
            <legend class='h2 bg-dark text-light text-center p-3 mt-3'>Details<img class='img-thumbnail rounded' src='images/<?php echo $image ?>'></legend>


            <table class="table table-hover">
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



                <?php echo $bookTable ?>
                <td><a href="index.php"><button class="btn btn-success" type="button">Back</button></a></td>

            </table>

        </fieldset>
    </div>
</body>

</html>