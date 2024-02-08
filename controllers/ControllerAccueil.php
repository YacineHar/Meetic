<?php
class Router
{
    private $_crtl;
    private $_view;

    public function routeReq()
    {
        try
        {
            //charge automatiquement les classes
            spl_autoload_register(function($class)
            {
                require_once('models/'.$class.'.php');
            });

            $url = "";

            if(isset($_GET['url']))
            {
                $url = explode('/', filter_var($_GET['url'],
                FILTER_SANITIZE_URL));

                $controller = ucfirst(strtolower($url[0]));
                $controllerClass = "Controller".$controller;
                $controllerFile = "controllers/".controllerClass.".php";

                if(file_exists($controllerFile))
                {
                    require_once($controllerFile);
                    $this->_crtl = new $controllerClass($url);
                }
                else
                {
                    throw new Exception('Page introuvable');
                }
            }
            else
            {
                require_once('controllers/ControllerAccueil.php');
                $this->_crtl = new ControllerAccueil($url);
            }
        }
        catch(Exception $e)
        {
            $errorMsg = $e->getMessage();
            require_once('views/viewError.php');
        }
    }
}