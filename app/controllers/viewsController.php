<?php

    namespace app\controllers;
    use app\models\viewsModel;
    
    class viewsController extends viewsModel{
        public function obtainViewsController($views){

            if ($views != "") {
                $response = $this -> obtainViewsModel($views);
            }else {
                $response = "login";
            }

            return $response;
        }
    }