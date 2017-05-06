<?php

class controller {
    
    protected $db;
    
    public functions __construct(){
        
        global $config;
		$this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
    }
    
    public function loadView($viewName, $viewData = array()){
        extract($viewData);
        include 'view/'.$viewName.'.php';
    }
    
    public function loadTemplate($viewName, $viewData = array()) {
        include 'view/template.php';
    }
    public function loadViewInTemplate($viewName, $viewData = array()) {
        extract($viewData);
        include 'view/'.$viewName.'.php';
    }
}

