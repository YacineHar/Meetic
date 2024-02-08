<?php
class Router
{
    private $_crtl;
    private $_view;
    public function routeReq()
    {
        try
        {
            //charge les classes automatiquement
            spl_autoload_register(function($class)
            {
                require_once('models/'.$class.'.php');
            });

            $url ='';

            if(isset($_GET['url']))
            {
                $url = explode('/', filter_var($_GET['url'],FILTER_SANITIZE_URL));
                $controller = ucfirst(strtolower($url[0]));
                $controllerClass = "Controller".$controller;
                $controllerFilde = "controllers/".
            }


        }
        catch(Exception $e)
        {

        }
    }
}