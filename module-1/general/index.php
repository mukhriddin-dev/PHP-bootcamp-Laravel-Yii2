<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <style>
        body {
            background-color: white;
            color: black;

        }
    </style>
</head>

<body>

<form action="login.php" method="POST" class="card bg-white p-5 w-50 mx-auto mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <label>
                    <input name="user_name" type="text" class="form-control" placeholder="Username">
                </label>
            </div>
            <div class="col-12 mb-4">
                <label>
                    <input name="password" type="password" class="form-control" placeholder="Password">
                </label>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>
    <code class="p-5">
        <?php

//            var_dump($_SERVER['HTTP_HOST']);
//            var_dump($_GET);
//            var_dump($_POST);
//            var_dump($_COOKIE)



        ?>
    </code>
</body>

</html>