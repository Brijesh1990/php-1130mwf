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
//print_r($data);
// echo $data; exit();
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
// echo $cat; exit();
// print_r($cat);
// add burger food inside of admin add food form

// admin logged in logic 
if(isset($_POST["login_btn"]))
{

$email=$_POST["email"];
$password=$_POST["password"];
$chk=$this->adminlogin('tbl_admin',$email,$password);
if($chk)
{
echo "<script>
alert('You are Logged in as Admin Successfully')
window.location='dashboard';
</script>";
}
else 
{

echo "<script>
alert('Your email and password are Incorrect try again')
window.location='./';
</script>";
}

}

// create a logic for logout as admin
if(isset($_GET["logout-here"]))
{
$chk=$this->logout();
echo "<script>
alert('You are Logout  as Admin Successfully')
window.location='./';
</script>";
}

// logic for change password of admin
if(isset($_POST["change-pass"]))
{
    $id=$_SESSION["admin_id"];
    $opass=$_POST["opass"];
    $npass=$_POST["npass"];
    $cpass=$_POST["cpass"];
    $chk=$this->changepasssword('tbl_admin','password',$opass,$npass,$cpass,'admin_id',$id);

    if($chk)
    {
        unset($_SESSION["admin_id"]);
        unset($_SESSION["email"]);
        session_destroy();
        echo "<script>
        alert('Your password successfully changed')
        window.location='./';
        </script>";
    }
    else 
    {
        echo "<script>
        alert('Your opass,npass and change password is not matched')
        window.location='change-password';
        </script>";
    }
}
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
case '/change-password':
require_once("index.php");
require_once("header.php");
require_once("sidebar.php");
require_once("changepassword.php");
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
