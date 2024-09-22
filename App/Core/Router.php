<?php

class Router
{
    protected $currentController = 'HomeController';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        $uri = $this->getUri();


        if (!empty($uri) && file_exists(ROOT_PATH . '/App/Controllers/' . ucwords($uri[0]) . 'Controller' . '.php')) {

            $this->currentController = ucwords($uri[0]) . 'Controller';

            unset($uri[0]);
        }

        require_once ROOT_PATH . '/App/Controllers/' . $this->currentController . '.php';

        $this->currentController = new $this->currentController;



        if (isset($uri[1])) {

            if (method_exists($this->currentController, $uri[1])) {

                $this->currentMethod = $uri[1];

                unset($uri[1]);
            }
        }

        $this->params = $uri ? array_values($uri) : [];

        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    private function getUri()
    {
        if (isset($_SERVER['REQUEST_URI'])) {

            $uri = trim($_SERVER['REQUEST_URI'], '/');

            $uri = filter_var($uri, FILTER_SANITIZE_URL);

            $uri = explode('/', $uri);

            return $uri;
        } else {
            return [];
        }
    }
}
