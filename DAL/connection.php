
<?php
 
    class Database{
    //database class instance and other variables
    
    private static $instance=null;
    private $connection;


    //constructor and other overwritten methods
    private function __construct()
    {
        $host="****";
        $username="****";
        $password="****";
        $database="****";
        //Instead of putting the error for every time I use a query. I have decided to put it in a constructor.
         try{
         $this->connection = mysqli_connect($host,$username,$password,$database);
         }
         catch(Error $e){
             echo "Couldn't connect" . $e;
         }
    }
       
    public static function getInstance(){
    if(is_null(self::$instance))
     {
         self::$instance= new Database();
     }
    return self::$instance;
    }

    public function getConnection(){
        return $this->connection;
    }
}
?>