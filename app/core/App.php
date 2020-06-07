<?php


class App
{

    //default controller and method for bootstraping our app
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();
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
