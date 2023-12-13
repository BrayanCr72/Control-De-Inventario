<?php

class data {

    public $server;
    public $user;
    public $password;
    public $db;
    public $connection;
    public $isActive;

    /* constructor */

    public function __construct() {
        $hostName ="DESKTOP-ON48ISV";
        
        switch ($hostName) {
            case "DESKTOP-ON48ISV": 
                $this->isActive = false;
                $this->server = "127.0.0.1";
                $this->user = "root";
                $this->password = "";
                $this->db = "controlinventario";
                break;
            
            default: //Hosting
                 $this->isActive = false;
      			 $this->server = "x.x.x.x";
      			 $this->user = "xxxxxxx";
      			 $this->password = "xxxxxxx";
      			 $this->db = "xxxxxxxxxx"; 
                break;
        }
    }

}



