<?php 


echo __FILE__ . "<BR>";


echo __LINE__ . "<BR>";
echo __DIR__ . "<BR>";

if(is_file(__FILE__)){
    
 echo "yes" . "<br>";   
}else{
    
    echo "No" . "<br>";
    
}

if(file_exists(__DIR__)){
    
 echo "yes" . "<br>";   
}else{
    
    echo "No" . "<br>";
    
}

if(is_dir(__DIR__)){
    
 echo "yes" . "<br>";   
}else{
    
    echo "No" . "<br>";
    
}

echo file_exists(__FILE__) ? "YESESSSS TENARY VERSION" : "NOOO";




?>