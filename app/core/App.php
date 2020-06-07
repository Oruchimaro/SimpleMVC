<?php


class App
{

    //default controller and method for bootstraping our app
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();

        //check  if requested controller exists
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        //get an instance of the controller 
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;


        //check for requested method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                //set the method
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //check if there is other params get the value of them
        $this->params = $url ? array_values($url) : [];
        //pass the params to requested method
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    /*
     * @param url like (/public/homecontroller/getProfile/id)
     * @return array  [homecontroller, getProfile, id]
     * @example /public/?url=home/?url=profile  ==> array([0]=>home [1]=>profile)
    */
    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}
