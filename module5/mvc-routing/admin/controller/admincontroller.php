<?php 
require_once("model/adminmodel.php");
class admincontroller extends adminmodel 
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
require_once("login.php");
break;

case '/dashboard':
require_once("index.php");
require_once("header.php");
require_once("sidebar.php");
require_once("dashboard.php");
require_once("footer.php");

break;

case '/addburger-category':
require_once("index.php");
require_once("header.php");
require_once("sidebar.php");
require_once("addburger_category.php");
require_once("footer.php");

break;
case '/manageburger-category':
require_once("index.php");
require_once("header.php");
require_once("sidebar.php");
require_once("manageburger_category.php");
require_once("footer.php");

break;


case '/addburger-food':
require_once("index.php");
require_once("header.php");
require_once("sidebar.php");
require_once("addburger_food.php");
require_once("footer.php");

break;
case '/manageburger-food':
require_once("index.php");
require_once("header.php");
require_once("sidebar.php");
require_once("manageburger_food.php");
require_once("footer.php");

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
$obj=new admincontroller;
?>
