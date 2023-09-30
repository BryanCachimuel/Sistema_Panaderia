<?php

    class Request {

        protected $request;
        protected $data;
        public $method;

        public function __construct($request, $flag = true) {
            $this->request = $request;
            $this->extractData();
            $this->setExtraData($flag);
        }

        public function extractData(){
            $this->data = array();
            foreach($this->request as $key => $value){
                if(is_object($value) || is_array($value)){
                    $this->data[$key] = new Request($value, false);
                }else{
                    if($key != "http_referer"){
                        $this->data[$key] = $value;
                    }
                }
            }
        }

        public function setExtraData($flag){
            
        }

    }

?>