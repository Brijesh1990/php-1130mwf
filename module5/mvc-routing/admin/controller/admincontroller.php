<?php 
require_once("model/adminmodel.php");
class admincontroller extends adminmodel 
{
public function __construct()
{
parent:: __construct();
// insert a burger category in admin logic
if(isset($_POST["add-category"]))
{
    $catnm=$_POST["categoryname"];
    $date=$_POST["added_date"];
    $data=array("categoryname"=>$catnm,"added_date"=>$date);
    $chk=$this->insertalldata('tbl_addburgercategory',$data);
    if($chk)
    {
       echo "<script>
       alert('Your Category added successfully')
       window.location='addburger-category';

       </script>";
    }
}
// fetch food category data
$cat=$this->selectalldata('tbl_addburgercategory');

// add burger food inside of admin add food form
if(isset($_POST[""]))
{
$this->insertalldata('tbl_addfood',$data);
}

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
