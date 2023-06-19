<?php

class SingupModel extends Dbh {
   protected function setUser($veznev, $kernev, $felnev, $jelszo, $email, $telephone){
        $stmt = $this->connect()->prepare('INSERT INTO user (veznev, kernev, felnev, jelszo, email, telephone) VALUES (?, ?, ?, ?, ?, ?);');
        
        $hashedPwd = password_hash($jelszo, PASSWORD_DEFAULT);
        
        if(!$stmt->execute(array($veznev, $kernev, $felnev, $hashedPwd, $email, $telephone))){
            $stmt = null;
            header("location ../regist.php?error=stmtfailed");
            exit();
        }
        
       $stmt =null;
    }
    
    protected function checkUser($felnev, $email){
        $stmt = $this->connect()->prepare('SELECT felnev FROM user WHERE felnev = ? OR email = ?;');
        
        if(!$stmt->execute(array($felnev, $email))){
            $stmt = null;
            header("location ../regist.php?error=stmtfailed");
            exit();
        }
        
        $resultCheck="";
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }
        return $resultCheck;
    }
}
