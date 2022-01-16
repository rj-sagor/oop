<?php
class Myfun{ 
    //method
    function set_name($name=""){

        return "$name  food is wammy<br>";
    }
    function get_name($name_end=""){
        return "$name_end is very bad<br>";
    }

}


$obj =new Myfun;
  echo  $obj->set_name('banana');
  echo $obj->get_name("dragon");
  echo $obj->get_name("jackfruit");
  echo $obj->get_name("");
    


?>