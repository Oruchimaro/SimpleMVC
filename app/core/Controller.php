<?php

class Controller
{
    //return model instance
    public function model($model)
    {
        $path = '../app/models/' . $model . '.php';
        if (file_exists($path)) {
            require_once $path;
        }

        return new $model();
    }
}
