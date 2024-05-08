<?php  
class model 
{
    public $conn="";
    public function __construct()
    {
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
}

?>