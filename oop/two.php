<?php

use Myfun as GlobalMyfun;

class Myfun{

    function __construct()
    {
        echo "jackfruit is our national fruit<br>";
    }
   //method
    function first_fruits($name=""){

     return "$name is food is very nice<br>";
    }
    

    function fruits(){


    }
    // magic variable
    function __destruct()
    {
        echo "over eat any food its harmpul our body<br>";
    }
}
$banana=new Myfun();
echo $banana->first_fruits("banana");
$apple=new Myfun();


?>