<?php 
echo "$_COOKIE[username]</br>";
echo "$_COOKIE[firstname]</br>";
echo "$_COOKIE[lastname]</br>";
    if(isset($_COOKIE["cookie"])) {
        foreach($_COOKIE["cookie"] as $key => $val){
            echo $key .' is '.$val."<br>\n";
        }
    }
?>