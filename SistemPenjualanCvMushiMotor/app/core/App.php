<?php

class App
{
    protected $controller = 'Login';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();

        //controller
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        }

        $controller_path = '../app/controllers/' . $this->controller . '.php';
        require_once $controller_path;
        $this->controller = new $this->controller;

        //method

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //parameters
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        //running controller and method
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = ($_GET['url']);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
