<?php 

?>

<!DOCTYPE html>
<html>

<head>
    <!-- Title -->
    <title>ToDo List</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
    <link href="components/assets/images/favicon.png" rel="icon">
    <link href="components/assets/images/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- CSS Files -->
    <link href="components/assets/css/style.css" rel="stylesheet">
    <link href="components/header/header.css" rel="stylesheet">
    <link href="components/content/content.css" rel="stylesheet">
    <link href="components/content/todo.css" rel="stylesheet">
    <link href="components/footer/footer.css" rel="stylesheet">

    <!-- Animations CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />

</head>

<body>

    <!-- ======= Header ======= -->
    <?php
    include "components/header/header.php"
    ?>

    <!-- ======= Content Section ======= -->
    <?php
    include "components/content/content.php"
    ?>

    <!-- ======= Footer ======= -->
    <?php
    include "components/footer/footer.php"
    ?>

    <!-- Optional JS Files -->
    <script src="components/assets/js/changeBg.js"></script>

</body>

</html>