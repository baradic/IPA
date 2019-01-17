<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foundation</title>
    <?php include_once "foundation/foundation_style.php" ?>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo isset($_GET["naslov"]) ? $_GET["naslov"] : "Default" ?></title>
</head>
<body>
<div class="top-bar">
    <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text">Foundation</li>
            <li><a href="index.php">page 1</a></li>
            <li><a href="bootstrap.php">page 2</a></li>
            <li><a href="foundation.php">page 3</a></li>
            <li><a href="skeleton.php">page 4</a></li>
            <li><a href="ingrid.php">page 5</a></li>
        </ul>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu">
            <li><input type="search" placeholder="Search"></li>
            <li><button type="button" class="button">Search</button></li>
        </ul>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
    $(document).foundation();
</script>
<h2><p style="text-align: center">Task 2</p></h2>
<br>
<h3><p style="text-align: center"></p></h3>
</body>
</html>

