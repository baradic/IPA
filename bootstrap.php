<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap</title>

    <!-- Bootstrap CSS -->
    <?php include_once "bootstrap/bootstrap_style.php" ?>


</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">page 1</a></li>
            <li><a href="bootstrap.php">page 2</a></li>
            <li><a href="foundation.php">page 3</a></li>
            <li><a href="skeleton.php">page 4</a></li>
            <li><a href="ingrid.php">page 5</a></li>
        </ul>
    </nav>
    <h1>Task 1</h1>

    <body style="background-color: <?php echo isset($_GET["boja"]) ? $_GET["boja"] : "grey" ?>">
    <h2><p style="text-align: center">Task 1</p></h2>
    <br>
    <h3><p style="text-align: center"></p></h3>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>

