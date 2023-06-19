<?php
class SingupControl extends SingupModel{
    private string $veznev, $kernev, $felnev, $jelszo, $jelszo2, $email;
    private int $telephone;
    
    public function __construct(string $veznev, string $kernev, string $felnev, string $jelszo, string $jelszo2, string $email, int $telephone) {
        $this->veznev = $veznev;
        $this->kernev = $kernev;
        $this->felnev = $felnev;
        $this->jelszo = $jelszo;
        $this->jelszo2 = $jelszo2;
        $this->email = $email;
        $this->telephone = $telephone;
    }

    public function signupUser(){
        if($this->emptyInput() == false){
          // echo "Üres mező!"  
          header("location: ../regist.php?error=emptyinput");
          exit(); 
        }
        if($this->invalidVeznev() == false){
          // echo "Rossz név!"    
          header("location: ../regist.php?error=veznev");
          exit(); 
        }
        if($this->invalidKernev() == false){
          // echo "Rossz név!"    
          header("location: ../regist.php?error=kernev");
          exit(); 
        }
        if($this->invalidFelnev() == false){
          // echo "Rossz felhasználónév!"    
          header("location: ../regist.php?error=felnev");
          exit(); 
        }
        if($this->invalidEmail() == false){
          // echo "Rossz email!"    
          header("location: ../regist.php?error=email");
          exit(); 
        }
        if($this->passwordMatch() == false){
          // echo "Jelszó nem egyezik!"    
          header("location: ../regist.php?error=passwordmatch");
          exit(); 
        }
        if($this->felnevTakenCheck() == false){
          // echo "Felhasználónév vagy jelszó már létezik!"    
          header("location: ../regist.php?error=useremailtaken");
          exit(); 
        }
        
        $this->setUser($this->veznev, $this->kernev, $this->felnev, $this->jelszo, $this->email, $this->telephone);
    }

    private function emptyInput(){
        $result="";
        if(empty($this->veznev) || empty($this->kernev) || empty($this->felnev) || empty($this->jelszo) || empty($this->email) || empty($this->telephone)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
    
     private function invalidVeznev(){
        $result="";
        if(!preg_match("/^[a-zA-z]*$/", $this->veznev)){
            $result = false;
        }
        else{
            $result =true;
        }
        return $result;
    }
    
    private function invalidKernev(){
        $result="";
        if(!preg_match("/^[a-zA-z]*$/", $this->kernev)){
            $result = false;
        }
        else{
            $result =true;
        }
        return $result;
    }
    
     private function invalidFelnev(){
        $result="";
        if(!preg_match("/^[a-zA-z0-9]*$/", $this->felnev)){
            $result = false;
        }
        else{
            $result =true;
        }
        return $result;
    }
    
    private function invalidEmail(){
        $result="";
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        else{
            $result =true;
        }
        return $result;
    }
    
    private function passwordMatch(){
        $result="";
        if($this->jelszo !== $this->jelszo2){
            $result = false;
        }
        else{
            $result =true;
        }
        return $result;
    }
    
    private function felnevTakenCheck(){
        $result;
        if(!$this->CheckUser($this->felnev, $this->email)){
            $result = false;
        }
        else{
            $result =true;
        }
        return $result;
    }

}
