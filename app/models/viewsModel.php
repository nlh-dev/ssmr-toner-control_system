<?php
    
    namespace app\models;

    class viewsModel {
        
        protected function obtainViewsModel($views){

            $blankList = ["dashboard", "toners", "printers", "rotation", "reload", "users", "addUsers"];

            if (in_array($views, $blankList)){
                if (is_file("./app/views/content/".$views."-view.php")) {
                    $content = "./app/views/content/".$views."-view.php";
                }else {
                    $content = "404";
                }
            }elseif ($views == "login" || $views == "index") {
                $content = "login";
            }else {
                $content = "404";
            }

            return $content;
        }
    }