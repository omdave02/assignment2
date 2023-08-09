<?php 
class model 
{
    public $conn="";
    public function __construct()
    {
        session_start();
        try 
        {
            $this->conn=new mysqli("localhost","root","","tbl1");
            // echo "success";

        }
        catch(Exception $e)
        {
            die(mysqli_error($this->conn));

        }
    }

    
    // create a new member function for add data

    public function installdata($table , $data)
    {
        $column=array_keys($data);
        $column1=implode(",",$column);
        $value=array_values($data);
        $value=implode("','",$value);

        $insert="insert into $table($column) value ('$value')";
        $exe=mysqli_query($this->conn,$insert);
        return $exe;
    }
}

?>