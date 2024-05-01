<?php 
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
         parent:: __construct();
        //load a view index content
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("content.php");
                    require_once("footer.php");
                    require_once("login.php");
                    break;

                case '/feedback-us':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("feedback.php");
                    require_once("footer.php");
                    require_once("login.php");
                    break;
                case '/register':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("register.php");
                    require_once("footer.php");
                    require_once("login.php");
                    break;
                default :
                require_once("index.php");
                require_once("header.php");
                require_once("404.php");
                require_once("footer.php");
                require_once("login.php");
                break; 
                    
            }
        }  
    }

}
$obj=new controller;
?>