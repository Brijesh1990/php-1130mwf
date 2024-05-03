<?php  
class adminmodel 
{
    public $conn="";
    public function __construct()
    {
        // database connection
        try 
        {
         $this->conn=new mysqli("localhost","root","","mvc-app");
         echo "connection successfully";
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
        $query=mysqli_query($this->conn,$insert);
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
}

?>