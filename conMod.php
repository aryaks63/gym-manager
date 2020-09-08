<?php

class DB{
    var $con;
    
    
    public function __construct() {
      $this->con = mysqli_connect("localhost", "root","","gym") or die(mysqli_error($this->con));
    }
    
    public function getConnection(){
        return $this->con;
    }
    
    public function __destruct() {
        mysqli_close($this->con);
    }
}




