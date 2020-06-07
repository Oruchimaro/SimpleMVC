<?php

class Home extends Controller
{
    public function index($name = '')
    {
        //get a model instance
        $user = $this->model('User');
        $user->name = $name;
        print_r($user);
    }

    public function test($pa = '')
    {
        echo 'test function and the param is ' . $pa;
    }
}
