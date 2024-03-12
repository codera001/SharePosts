<?php
/* App core class
 *creates URL & loads core controller
 *URL FORMAT - /controller/method/params
 */
class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();
        // look for controllers in the first value
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            
            $this->currentController = ucwords($url[0]);
            // unset 0 index
            unset($url[0]);
        }
        // require the contoller
        require_once '../app/controllers/' . $this->currentController . '.php';

        // instantiate controller class
        $this->currentController = new $this->currentController;

         //   check for second part of url
    if (isset($url[1])) {
        // check to see if the method exists in controller
        if(method_exists($this->currentController, $url[1])){
            $this->currentMethod = $url[1];
          
            unset($url[1]);
        }
    }
    // echo $this->currentMethod;
    // get params
    $this->params = $url ? array_values($url): [];
    
    // call a callback with array of params
    call_user_func_array([$this->currentController, $this->currentMethod], $this->params);


    }

    public function getUrl()
    {
        if (isset($_GET['url'])) { 
            $url = rtrim($_GET['url'], '/');
            
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url); //to turn the url into an array
            return $url;
        }
    }

//     public function getUrl()
// {
//     $url = isset($_GET['url']) ? $_GET['url'] : '';
//     $url = rtrim($url, '/');
//     $url = filter_var($url, FILTER_SANITIZE_URL);
//     $url = explode('/', $url); //to turn the url into an array
//     return $url;
// }

}