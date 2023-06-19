<?php

class LoginControl extends LoginModel {
    private  $felnev, $jelszo;
    
    public function __construct($felnev, $jelszo) {
        $this->felnev = $felnev;
        $this->jelszo = $jelszo;
    }

     public function loginUser(){
        if($this->emptyInput() == false){
          // echo "Üres mező!"  
          header("location: ../login.php?error=emptyinput");
          exit(); 
        }
          
        $this->getUser($this->felnev, $this->jelszo);
    }

    private function emptyInput(){
        $result="";
        if(empty($this->felnev) || empty($this->jelszo)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
}
