<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Media</title>
    <?php require_once 'components/boot.php' ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">


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

            <legend class='h2 bg-dark text-light text-center p-3 mt-3'>Add media<img class='img-thumbnail rounded' src='images/media.png'></legend>

            <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
                <table class='table table-hover'>
                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title" placeholder="Shawshank Redemption" /></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td> <select class="form-select" name="type">
                                <option selected value="dvd">dvd</option>
                                <option value="book">book</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class="form-control" type="text" name="description" placeholder="A ground-breaking film about..." /></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            <select class="form-select" name="status">
                                <option selected value="available">available</option>
                                <option value="reserved">reserved</option>
                            </select>

                        </td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td><input class='form-control' type="file" name="image" /></td>
                    </tr>

                    <tr>
                        <td><a href="index.php"><button class='btn btn-success' type="button">Back</button></a></td>
                        <td><button class='btn btn-primary' type="submit">Add media</button></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
</body>

</html>