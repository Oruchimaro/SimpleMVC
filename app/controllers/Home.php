<?php

class Home extends Controller
{
    public function index($name = '')
    {
        //get a model instance
        $user = $this->model('User');
        $user->name = $name;

        //return a view 
        $this->view('home/index', ['name' => $user->name]);
    }

    public function test($pa = '')
    {
        echo 'test function and the param is ' . $pa;
    }
}
