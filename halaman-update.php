<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
</head>

<!-- GET DATA -->
<?php
$id = $_GET['ID'];
include "config.php";
$sql = mysqli_query($con, "SELECT * FROM `todo` WHERE `Id` = '$id'");
$data = mysqli_fetch_array($sql);
?>

<body style="background-image: url(ppp3.jpg); width: 100%;">
    <form action="update.php" method="post" class="container bg-secondary m-auto shadow mt-5 py-4 col-md-4 rounded">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center font-monospace">Edit</h2>
                <div class="input-group mb-3">
                    <input type="text" value="<?php echo $data['list'] ?>" name="list" class="form-control shadow" placeholder="Wanna change??">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-repeat fa-beat"></i>
                    </button>
                </div>
                <input type="hidden" name="id" value="<?php echo $data['Id'] ?>">
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>