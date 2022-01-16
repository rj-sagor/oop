<?php



use Myfun as GlobalMyfun;

class Myfun{
    public $color="";
    //   magic variable
    function __construct($given_color)
    {
        $this->color = $given_color;
    }
   //method
    function first_fruits($name=""){

     return "$this->color $name is food is very nice<br>";
    }
    

    function fruits($last_name=""){
        return "$this->color $last_name is a forener food<br>";


    }
    // magic variable
    function __destruct()
    {
        echo "over eat any food its harmpul our body<br>";
    }
}
$banana=new Myfun("yellow");
echo $banana->first_fruits("banana");

$apple=new Myfun("red");
echo $apple->fruits("apple");


?>
