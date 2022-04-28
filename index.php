<?php require_once 'actions/db_connect.php';

$sql = 'SELECT * FROM media';
$result = mysqli_query($connect, $sql); // needs 2 things: connection to db and a query. $connect was defined in db_connect.php

$tbody = "";

if (mysqli_num_rows($result) > 0) { // if there is a record from table
    while ($row = mysqli_fetch_assoc($result)) {
        $tbody .= "<tr>
            <td><img class='img-thumbnail' style='height:150px' src='images/" . $row['image'] . "'</td>
            <td>" . $row['title'] . "</td>
            <td>" . $row['type'] . "</td>
            <td>" . $row['description'] . "<br><a href='details.php?id=" . $row['id'] . "'>Show Media</a></td>
            <td>" . $row['status'] . "</td>             
            <td><a href='update.php?id=" . $row['id'] . "'><button class='btn btn-primary' type='button'>Update</button></a>
            <a href='delete.php?id=" . $row['id'] . "'><button class='btn btn-danger mt-1' type='button'>Delete</button></a></td>
            </tr>";
    }
} else {
    $tbody = "<tr><td colspan='4' class='text-center'>No Data Available</td></tr>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BigLibrary</title>
    <?php require_once 'components/boot.php'; ?>
    <style type="text/css">
        td button {
            width: 80px;
        }

        .img-thumbnail {
            width: 70px !important;
            height: 70px !important;
            object-fit: cover;
        }

        legend .img-thumbnail {
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

            <legend class='h2 bg-dark text-light text-center p-3 mt-3'>BigLibrary | Media<img class='img-thumbnail rounded' src='images/media.png'></legend>

            <div class="mb-3">
                <a href="create.php"><button class='btn btn-primary' type="button">Add media</button></a>
            </div>
            <table class='table table-hover'>
                <thead class='table'>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>

                </thead>
                <tbody>
                    <?php echo $tbody ?>
                </tbody>


            </table>


        </fieldset>

    </div>
</body>

</html>