<?php




class AdminTools {

//Log the user in. First checks to see if the
//username and password match a row in the database.
//If it is successful, set the session variables
//and store the user object within.
public function login($login,$password,$link)

    {
       

        $login = trim($login);
        $password = trim($password);
     
        $query = sprintf("SELECT login FROM admin WHERE login='%s' AND 
        pass = '%s'" ,mysqli_real_escape_string($link,$login),mysqli_real_escape_string($link,$password));
        $result = mysqli_query($link,$query);
       
        if(mysqli_num_rows($result))
        {
            
            $_SESSION["admin"] = 'admin';
            $_SESSION["login_time"] = time();
            $_SESSION["logged_in"] = 1;
          
            return true;
        }else{
            return false;
        }
}


public function logout() {
    
    unset($_SESSION['admin']);
    unset($_SESSION['login_time']);
    unset($_SESSION['logged_in']);
    session_destroy();
}
}


?>