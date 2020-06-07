<?php

class Home extends Controller
{
    public function index()
    {
        echo 'index function with no param';
    }

    public function test($pa = '')
    {
        echo 'test function and the param is ' . $pa;
    }
}
