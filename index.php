<?php

    require_once "./config/app.php";
    require_once "./autoload.php";
    require_once "./app/views/inc/session_start.php";

    if (isset($_GET['views'])) {
        $url = explode("/", $_GET['views']);
    } else {
        $url = ["login"];
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once "./app/views/inc/head.php"; ?>
</head>

<body>
    <?php 
    use app\controllers\viewsController;
    
    $viewsController =  new viewsController();
    $views = $viewsController->obtainViewsController($url[0]);

    if ($views == "login" || $views == "404") {
        require_once "./app/views/content/".$views."-view.php";
    }else {
        require_once "./app/views/inc/layout/sidebar.php";
        require_once $views;
    }
    
    require_once "./app/views/inc/script.php"; 
    ?>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://kit.fontawesome.com/dbdf95c22b.js" crossorigin="anonymous"></script>
</body>

</html>