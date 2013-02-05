<?php
define ('BASE_PATH',dirname(realpath(__FILE__)));
$host="localhost";
$user='krupal';
$public_replace_string="/home/$user/public_html/";
$localhost_replace_string="/var/www/";
$string= BASE_PATH;

    if (strpos($string,"public_html")==true)
    {
        $address=trim(substr_replace("$string","http://localhost/~$user/",0,strlen($public_replace_string)));
        define ('main',$address . '/');
           
    }
    else
    {
        $address=substr_replace("$string","http://localhost/",0,strlen($localhost_replace_string));
        define ('main',$address . '/');
        
    }

?>