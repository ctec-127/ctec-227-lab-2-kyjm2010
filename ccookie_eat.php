<?php 
echo "User Name: $_COOKIE[username]</br>";
echo "First Name: $_COOKIE[firstname]</br>";
echo "Last Name: $_COOKIE[lastname]</br>";
    if(isset($_COOKIE["cookie"])) {
        foreach($_COOKIE["cookie"] as $key => $val){
            echo $key .' is '.$val."<br>\n";
        }
    }
?>