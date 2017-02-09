<?php
require_once('config.php');
class Database{
    
    public $connection; // declaring variable as public \\
    
    function __construct(){
        
        $this->open_db_connection(); // consutruct function so database connction is called all the time whenever this file is used. \\
    }
    
    public function open_db_connection() // Conneceting to database method \\
    {
$this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        
        if($this->connection->connect_errno) {
            die("Failed connnection". $this->connection->connect_error);
        }
    }


public function confirm_query($result) //confirm if query is valid , not returns error \\
{
        if(!$result){
        die("Query Failed".$this->connection->error);
    }
}
        public function query($sql)  // SQL queries are processed using this method \\\
        {
    $result=$this->connection->query($sql);
  $this->confirm_query($result);
    return $result;
}

public function escape_string($string)  /// Cleans up inputs from unwanted data to prvent SQL Injection
{
    
    $escape_string=$this->connection->real_escape_string($string);
    return $escape_string;
}


    
    ////////////// End of Class \\\\\\\\\\\\\\\\

}

$database = new Database();


                        
            
?>