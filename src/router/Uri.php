<?php

    class Uri {

        var $uri;
        var $method;
        var $function;
        var $matches;
        protected $request;
        protected $response;

        public function __construct($uri, $method, $function){
            $this->uri = $uri;
            $this->method = $method;
            $this->function = $function;
        }

        public function match($url) {
            $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->uri);
            $regex = "#^$path$#i";
            if (!preg_match($regex, $url, $matches)) {
                return false;
            }
            if ($this->method != $_SERVER['REQUEST_METHOD'] && $this->method != "ANY") {
                return false;
            }
            array_shift($matches);
            $this->matches = $matches;
            return true;
        }

        private function execFunction(){
            $this->parseRequest();
            $this->response = call_user_func_array($this->function, $this->matches);
        }
        
        public function call(){
            try {
               $this->request = $_REQUEST;
               $this->execFunction(); 
               $this->printResponse();
            } catch (Exception $e) {
                echo "ERROR: ". $e->getMessage();
            }
        }

        private function parseRequest(){
            $reflectionFunct = new ReflectionMethod($this->function);
            $this->request = new Request($this->request);
            $this->matches[] = $this->request;
        }

        

    }

?>