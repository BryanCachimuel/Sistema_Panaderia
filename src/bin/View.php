<?php

    class View {

        protected $variables;
        protected $output;

        function __construct(){
            
        }

        public function render($file, $variables=null){
            $this->variables = $variables;
            $file = PATH_VIEWS . $file;
            ob_start();
            $this->includeFile($file);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }

        public function includeFile($file){
            if(isset($this->variables) && is_array($this->variables)){
                foreach($this->variables as $key => $value){
                    global ${$key};
                    ${$key} = $value;
                }
            }
            if(file_exists(($file))){
                return include $file;
            }else
            if(file_exists($file . ".php")){
                return include $file . ".php";
            }else
            if(file_exists($file . ".html")){
                return include $file . ".html";
            }else
            if(file_exists($file . ".htm")){
                return include $file . "htm";
            }else{
                echo "<h2>No existe el archivo: $file</h2></br>";
            }
        }

    }

?>