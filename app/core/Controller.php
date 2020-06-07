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

    //return view instance
    public function view($view, $data = [])
    {
        $path = '../app/views/' . $view . '.php';
        if (file_exists($path)) {
            //data will be automatically passed to view
            require_once $path;
        }
    }
}
