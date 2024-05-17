<?php  
class model 
{
public $conn="";
public function __construct()
{
 session_start();   
// database connection
try 
{
$this->conn=new mysqli("localhost","root","","mvc-app");
//  echo "connection successfully";
}
catch(Exception)
{
die(mysqli_error($this->conn));

}
}
// create a member function for select all data
public function selectalldata($table)
{
$select="select * from $table";
$query=mysqli_query($this->conn,$select);
while($fetch=mysqli_fetch_array($query))
{
$arr[]=$fetch;

}
return $arr;
}

// create a member function for select all data and get category food
public function selectcategoryfood($table,$column,$id)
{
$select="select * from $table where $column='$id'";
$query=mysqli_query($this->conn,$select);
while($fetch=mysqli_fetch_array($query))
{
$arr[]=$fetch;

}
return $arr;
}

// create a member function for insert data
public function insertalldata($table,$data)
{

$key=array_keys($data);
$key1=implode(',',$key);

$value=array_values($data);
$value1=implode("','",$value);

$insert="insert into $table($key1) values ('$value1')";
// echo $insert; exit();
$query=mysqli_query($this->conn,$insert);
// echo $query; exit();
return $query;
} 

// create a member funtion for customers Login panel

public function customerlogin($table,$email,$password)
{
$select="select * from $table where email='$email' and password='$password'";
$query=mysqli_query($this->conn,$select);
$fetch=mysqli_fetch_array($query);
$num_row=mysqli_num_rows($query);
if($num_row==1)
{
$_SESSION["customer_id"]=$fetch["customer_id"];
$_SESSION["name"]=$fetch["name"];
$_SESSION["email"]=$fetch["email"];
$arr[]=$fetch;
return $arr;
}
else 
{
return false;
}
}
// create a member function for logout as customers
public function logout()
{
    unset($_SESSION["customer_id"]);
    unset($_SESSION["name"]);
    unset($_SESSION["email"]);
    session_destroy();
    return true;
}

}

?>