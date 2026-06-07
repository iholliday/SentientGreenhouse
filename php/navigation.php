<!--
php
database connection
session
check if logged in

head

get data needed

out in:
overall grid with responsiveness
divs for background styles, grouping, alignment
functional elements

js import
-->

<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentient Greenhouse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/global.css">
</head>

<body>
    <div class="row">
        Header
    </div>
    <div class="row">
        <div class="col-3">Overview</div>
            <div onclick="changePage('overview.php')"></div>
        <div class="col-3">Controls</div>
            <div onclick="changePage('controls.php')"></div>
        <div class="col-6">...</div>
    </div>
    <div id="page-content">
        <?php 
        include 'overview.php'; 
        include 'controls.php';
        ?>
    </div>
</body>
</html>