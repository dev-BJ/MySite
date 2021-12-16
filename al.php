<?php
function al($class){
    $class=trim($class);
    include "../conf/$class.php";
}
spl_autoload_register(al);
?>