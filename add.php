<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include 'db.php';


    $name= @$_POST["title"];
    $description = @$_POST["description"];
    $author = @$_POST["author"];
    $temp_file = @$_FILES["img"]["tmp_name"];
    $file = basename($_FILES["img"]["name"]);
    echo $file;
    $dir = "books/";
    $uploaded = move_uploaded_file($temp_file, $dir . $file);
    if ($uploaded) {



        $q = "INSERT INTO `books` VALUES (null, '$name', '$description', '$author', '$file');";
        $res = mysqli_query($con, $q);

        if ($res) {
            header("location: index.php");
        } else {
            echo 'data  not inserted sucessfully' . mysqli_error($con);
        }
    }
};


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body class="col-md-6 m-auto py-1">
    <div class="container  mt-5">
        <h2 class="text-center">Add Book</h2>
        <form class="mt-5" method="POST" action="/ebook/add.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Book Title</label>
                <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" reset>
            </div>
            <div class="mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Add description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1" style="height: 5rem;">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Author</label>
                <input type="text" name="author" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Book cover</label>
                <input class="form-control" name="img" type="file" id="formFile">
            </div>

            <button type="submit" class="btn btn-dark">Add book</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>