<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url('ppp.jpg');
            background-size: cover;
            font-family: 'Open Sans', sans-serif;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .todo-card {
            width: 250px;
            margin: 10px;
            background-color: #343a40;
            color: #fff;
            border: none;
        }

        .todo-card-header {
            background-color: #6c757d;
            color: #fff;
        }

        .todo-card:hover {
        box-shadow: 0 0 10px white;
        transform: scale(1.05);
        transition: box-shadow 0.5s, transform 0.3s;
    }
    </style>
</head>

<body>
    <form action="insert.php" method="post">
        <div class="container">
            <div class="card bg-secondary m-auto shadow mt-5 py-4 col-md-5 rounded">
                <div class="card-body text-center text-dark">
                    <h2 class="font-monospace">Todo List</h2>
                    <div class="input-group">
                        <input type="text" name="list" class="form-control shadow" placeholder="Todo List">
                        <button class="btn btn-primary"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- GET DATA FROM LOCALHOST -->
    <?php
    include "config.php";
    $sql = mysqli_query($con, "SELECT * FROM `todo`");
    ?>
    <!-- tampilkan data -->
    <div class="container card-container">
    <?php
    $counter = 1;

    while ($row = mysqli_fetch_array($sql)) {
    ?>
        <div class="card todo-card">
            <div class="card-body">
                <p class="card-text"><?php echo $counter . ". " . $row['list'] ?></p>
            </div>
            <div class="card-footer text-end">
                <a href="delete.php?ID=<?php echo $row['Id'] ?>" class="btn btn-outline-success"><i class="fa-solid fa-check fa-bounce"></i></a>
                <a href="halaman-update.php?ID=<?php echo $row['Id'] ?>" class="btn btn-outline-warning"><i class="fa-regular fa-pen-to-square fa-beat"></i></a>
            </div>
        </div>
    <?php
        $counter++;
    }
    ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>