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

    // VIEWS CONTROLLER INDEX
    $viewsController =  new viewsController();
    $views = $viewsController->obtainViewsController($url[0]);

    if ($views == "login" || $views == "404") {
        require_once "./app/views/content/" . $views . "-view.php";
    } else {
        require_once "./app/views/inc/layout/sidebar.php";
        require_once $views;
    }
    
    // MODAL IMPORTS
    require_once "./app/views/inc/components/deleteUsersModal.php";
    require_once "./app/views/inc/components/addUsersModal.php";
    
    // SCRIPTS IMPORTS
    require_once "./app/views/inc/script.php";
    ?>

</body>

</html>