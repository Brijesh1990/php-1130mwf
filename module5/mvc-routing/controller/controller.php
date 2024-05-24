<?php 
//error_reporting(0);
require_once("model/model.php");
class controller extends model 
{
public function __construct()
{
parent:: __construct();
//display all food inside of customers panel  
$shwfood=$this->selectalldata('tbl_addfood');
// display category in navbar
$shwcat=$this->selectalldata('tbl_addburgercategory');
//fetch category food details
if(isset($_GET["detailsfoodid"]))
{
$id= base64_decode($_GET["detailsfoodid"]);
$shwfood=$this->selectcategoryfood('tbl_addfood','category_id',$id);
} 
// fetch foods details
if(isset($_GET["fooddetails"]))
{
$id=base64_decode($_GET["fooddetails"]);
$shwfooddetails=$this->selectcategoryfood('tbl_addfood','food_id',$id);
} 
// create a account of customers
if(isset($_POST["register"]))
{
date_default_timezone_set("Asia/Calcutta");
$name=$_POST["name"];
$email=$_POST["email"];
$pwd=base64_encode($_POST["password"]);
$cpwd=base64_encode($_POST["cpassword"]);
$mobile=$_POST["mobile"];
$date=date("d/m/Y H:i:s a");
$data=array("name"=>$name,"email"=>$email,"password"=>$pwd,"mobile"=>$mobile,"added_date"=>$date);
if($pwd==$cpwd)
{

$this->insertalldata('tbl_customer',$data);   
echo "<script>
alert('Thanks for created Your account with Us')
window.location='./register';
</script>";
}
else 
{
echo "<script>
alert('Password and conifrmed password does not matched')
window.location='./register';
</script>";
}
}
// customers login here
if(isset($_POST["login"]))
{
$email=$_POST["email"];
$password=base64_encode($_POST["password"]);
$chk=$this->customerlogin('tbl_customer',$email,$password);
if($chk)
{
echo "<script>
alert('You are Logged in successfully')
window.location='./';
</script>";
}
else 
{
echo "<script>
alert('Your email and Password is wrong Try again')
window.location='./';
</script>";
}

}

//manage profiles using session id
if(isset($_SESSION["customer_id"]))
{
$id=$_SESSION["customer_id"];
$mangeprof=$this->selectcategoryfood('tbl_customer','customer_id',$id);
} 
//fetch country in manage profile dropdown
$country=$this->selectalldata('tbl_country');
//fetch state in manage profile dropdown
$state=$this->selectalldata('tbl_state');
//fetch city in manage profile dropdown
$city=$this->selectalldata('tbl_city');
// add food inside of cart
if(isset($_POST["addtocart"]))
{
date_default_timezone_set("Asia/Calcutta");
$customer_id=$_SESSION["customer_id"];
$foodid=$_POST["food_id"];
$qty=$_POST["qty"];
$price=$_POST["price"];
$subtotal=$price*$qty;
$adddate=date("d/m/Y H:i:s a");
$data=array("customer_id"=>$customer_id,"food_id"=>$foodid,"quantity"=>$qty,"price"=>$price,"subtotal"=>$subtotal,"addeddate"=>$adddate);
$chk=$this->insertalldata('tbl_cart',$data);

if($chk)
{
echo "<script>
alert('Your food successfully added in cart')
window.location='./viewcart';
</script>";
}
}

// view cart added by customers
if(isset($_SESSION["customer_id"]))
{   $id=$_SESSION["customer_id"];
    $shwcart=$this->joindata('tbl_cart','tbl_customer','tbl_addfood','tbl_cart.customer_id=tbl_customer.customer_id','tbl_cart.food_id=tbl_addfood.food_id','customer_id',$id);
}
// count in cart
if(isset($_SESSION["customer_id"]))
{
    $id=$_SESSION["customer_id"];
    $totalcount=$this->selectcount('tbl_cart','cart_id','customer_id',$id);
}
// total of subtotal in cart
if(isset($_SESSION["customer_id"]))
{
    $id=$_SESSION["customer_id"];
    $subtotal=$this->selectsubtotal('tbl_cart','subtotal','customer_id',$id);
}
// logout as customers
if(isset($_GET["logout-here"]))
{
$this->logout();
unset($_SESSION["customer_id"]);
unset($_SESSION["name"]);
unset($_SESSION["email"]);
session_destroy();
echo "<script>
alert('You are successfully logout')
window.location='./';
</script>";

}

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
case '/allfoods':
require_once("index.php");
require_once("header.php");
require_once("navbar.php");
require_once("allfoods.php");
require_once("footer.php");
require_once("login.php");
break;
case '/foodsdetails':
require_once("index.php");
require_once("header.php");
require_once("navbar.php");
require_once("foodsdetails.php");
require_once("footer.php");
require_once("login.php");
require_once("ordermodal.php");
break;

case '/manage-profile':
require_once("index.php");
require_once("header.php");
require_once("navbar.php");
require_once("manageprofile.php");
require_once("footer.php");
break;

case '/viewcart':
require_once("index.php");
require_once("header.php");
require_once("navbar.php");
require_once("viewcart.php");
require_once("footer.php");
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