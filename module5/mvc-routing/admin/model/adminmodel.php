<?php  
class adminmodel 
{
    public $conn="";
    public function __construct()
    {
        session_start(); //temporary variables that is used to store data one page to another page
        // database connection
        try 
        {
         $this->conn=new mysqli("localhost","root","","mvc-app");
        //  echo "connection successfully";
        }
        catch(Exception $err)
        {
             echo $this->get_message();
            //die(mysqli_error($this->conn));
        }
    }
    //create a member function for insert all data
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

    //create a member function for admin login 

    public function adminlogin($table,$email,$password)
    {
        $select="select * from $table where email='$email' and password='$password'";
        $query=mysqli_query($this->conn,$select);
        $fetch=mysqli_fetch_array($query);
        $num_row=mysqli_num_rows($query);
        if($num_row==1)
        {
        $_SESSION["admin_id"]=$fetch["admin_id"];
        $_SESSION["email"]=$fetch["email"];
        $arr[]=$fetch;
        return $arr;
        }
        else 
        {
            return false;
        }
    }

    // create a member function for change password 
    public function changepasssword($table,$column,$opass,$npass,$cpass,$adminid,$id)
    {
        $select="select $column from $table where $adminid='$id'";
        $query=mysqli_query($this->conn,$select);
        $fetch=mysqli_fetch_array($query);
        $p=$fetch["password"];
        if($p==$opass && $npass==$cpass)
        {
         $upd="update $table set $column='$npass' where $adminid='$id'";
         $query=mysqli_query($this->conn,$upd);
         return $query;
        }
        else 
        {
         return false;
        }
        

    }
    // create a member function for logout as admin
    public function logout()
    {
        // unset a set id from session
        unset($_SESSION["admin_id"]);
        unset($_SESSION["email"]);
        session_destroy();
        return true;
    }
}

?>