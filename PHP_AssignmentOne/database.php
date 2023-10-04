<?php
// creating a class called database to hold the database connection information

class Database{


    private $connection;
    // a private keyword can only be accessed from within the class
    // in which is defined. All the keywords are by default under the public category
    // unless they are specified as private or protected

    function __construct(){
        // in php  $this keyword references the current object of the class. The $this keyword
        //allows you to access the properties and methods of the current object within the class using the
        // object operator
        $this->connect_db();
    }

    // the public access modifier allows you to access properties and methods from both inside and outside off the class

    // the connect_db function has my specific data for my connection given by cstech
    public function connect_db(){
        $this->connection = mysqli_connect('172.31.22.43','Susana200553998','rMjlp8c8Qy','Susana200553998');
        if (mysqli_connect_error())
        {
            die("Database connection failed".mysqli_connect_error());
        }

    }

    // this "Create" function has 15 parameters
    public function create($fullname,$fulladdress,$phonenumber,$email,$size,$dough,$base_cheese,$base_sauce,$veggieTopping,$meatTopping,$cheeseTopping,$quantity,$sides,$drink,$dippingSauce){
        $sql ="INSERT INTO Orders (fullname,fulladdress,phonenumber,email,size,dough,base_cheese,base_sauce,veggieTopping,meatTopping,cheeseTopping,quantity,sides,drink,dippingSauce) VALUES('$fullname','$fulladdress','$phonenumber','$email','$size','$dough','$base_cheese','$base_sauce','$veggieTopping','$meatTopping','$cheeseTopping','$quantity','$sides','$drink','$dippingSauce')";
        $res = mysqli_query($this->connection,$sql);
        if($res)
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    // a SQL query where selects all the columns from the row
    public function read($id=null){
        $sql = "SELECT * FROM Orders";
        if($id)
        {
            $sql .= "WHERE id =$id";
        }
        $res = mysqli_query($this->connection,$sql);
        return $res;
    }

    // this function has 2 parameters:
    // the $inputs parameter is an associative array. It can be $_POST, $_GET, or a regular associative array
    // the $fields parameter is an array that specifies a list of fields with rules

    // The sanitize() function returns an array that contains the sanitized data
    public function sanitize($var){
        $return =mysqli_real_escape_string($this->connection,$var);
        return $return;
    }




}

$database = new Database();

?>