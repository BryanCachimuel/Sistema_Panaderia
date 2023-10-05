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

    }

?>