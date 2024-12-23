<?php

    namespace app\controllers;
    use app\models\mainModel;

    class userController extends mainModel{
        
        // FUNCTION TO ADD NEW USERS
        public function addUserController(){
            
            // STORING THE DATA SENT BY THE FORM
            $userFirstName = $this->cleanRequest($_POST['userFirstName']);
            $userLastName = $this->cleanRequest($_POST['userLastName']);
            $userName = $this->cleanRequest($_POST['userName']);
            $userPassword = $this->cleanRequest($_POST['userPassword']);
            
            // VERIFYING IF THE DATA IS EMPTY
            if ($userFirstName == "" || $userLastName == "" || $userName == "" || $userPassword == "") {
                $alert = [
                    "type" => "simple",
                    "icon" => "error",
                    "title" => "¡Ocurrió un error!",
                    "text" => "¡No has llenado todos los campos!",
                ];
                return json_encode($alert);
                exit();
            }
        }
    }
