<?php require_once 'connect.php';  
session_start();  
?>  
  
<?php  
  
    if (!empty($_POST['password']) and !empty($_POST['login'])) {  
        $login = $_POST['login'];  
        $password = $_POST['password'];  
        $l='admin';  
        $p='admin';    
        $u='user';
        $u1='user'; 
        
 
 
if (!empty($login)) {  
        if ($login == $l and $password==$p ) {  
                    require('dashboard.php');  
                     
                   }   
              
        elseif ($login ==$u and $password==$u1) {  
                require('USER.html');  
                  
             }   
            
        else  { 

             require('login.php');  
         }   
                  
    } 
    } 


  
?>

