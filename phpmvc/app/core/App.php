<?php

class App{
    protected $controller = 'Home'; //setting controller default
    protected $method = 'index'; //setting method default
    protected $params = [];

    public function __construct()
    {
        $url=$this->parseURL();
        
        //controller
        if(file_exists('../app/controllers/' . $url[0] . '.php') ) { //cek array ke 0 nama tersebut ada/tdk pd controller
            $this->controller = $url[0];
            unset($url[0]);
        }
        
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
        
        //method
        if(isset($url[1]))
        {
            if(method_exists($this->controller, $url[1]))
            {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //params
        if(!empty($url))
        {
            $this->params = array_values($url);
            
        }

        //jalankan controller & method, dan kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if(isset($_GET['url']))
        {
            $url = rtrim( $_GET['url'], '/'); //menghilangkan /
            $url = filter_var($url, FILTER_SANITIZE_URL); //memfilter karakter dkk yang tdk dibutuhkan pada url
            $url = explode('/', $url); // pecah ke string(pemecahan ada pd setiap /)
            return $url;
        }
    }

}