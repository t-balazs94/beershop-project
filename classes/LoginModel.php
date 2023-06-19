<?php

class LoginModel extends Dbh {

    protected function getUser($felnev, $jelszo) {
        $stmt = $this->connect()->prepare('SELECT * FROM user WHERE felnev = ? OR email = ?;');

        if (!$stmt->execute(array($felnev, $jelszo))) {
            $stmt = null;
            header("location ../login.php?error=stmtfailed");
            exit();
        }
        
        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: ../login.php?error=usernotfound");
            exit();
        }
        
        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($jelszo, $pwdHashed[0]["jelszo"]);
        if($checkPwd == false){
            $stmt = null;
            header("location: ../login.php?error=wrongpassword");
            exit();
        }
        elseif($checkPwd == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM user WHERE felnev = ? OR email = ? AND jelszo = ?;');
            
            if (!$stmt->execute(array($felnev, $email, $jelszo))) {
                $stmt = null;
                header("location ../login.php?error=stmtfailed");
                exit();
            }
            
            if($stmt->rowCount() == 0){
                $stmt = null;
                header("location: ../login.php?error=usernotfound");
                exit();
            } 
            
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            session_start();
            $_SESSION["userid"] = $user[0]["id"];
            $_SESSION["userfelnev"] = $user[0]["felnev"];
        }
        
      
    }
}
