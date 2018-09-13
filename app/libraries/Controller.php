<?php

/*
* Base Controlle
* Loads the model and views 
*/

class Controller {

    public function model($model){
        //Require model file
        require_once '../app/models/' . $model . '.php';

        //Instanite model
        return new $model();
    }

    //Load view
    public function view($view, $data = []){
        if(file_exists('../app/views/' . $view .'.php')){
            require_once '../app/views/' . $view .'.php';
        } else {
            die('View does not exists');
        }
    }
}