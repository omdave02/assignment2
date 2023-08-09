<?php 
class db
{
    public $conn="";
    public function __construct()
    {
        session_start();
        try 
        {
            $this->conn=new mysqli("localhost","root","","users");
            // echo "success";

        }
        catch(Exception $e)
        {
            die(mysqli_error($this->conn));

        }
    }
}
?>