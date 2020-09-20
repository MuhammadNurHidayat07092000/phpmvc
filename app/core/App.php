<?php 

class App {
    public function __construct() {

        $url = $this->parseURL();

    }


    public function parseURL() {

        if( isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITAZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
