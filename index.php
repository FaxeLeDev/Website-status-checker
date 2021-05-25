<?php
// website checker

    function WebCheck($url){
    // Check if URL is correct
    if(!filter_var($url, FILTER_VALIDATE_URL)){
      return false;
    }
    // Initialise cURL
    $ch = curl_init($url);
    
    // define option
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,10);
    curl_setopt($ch,CURLOPT_HEADER,true);
    curl_setopt($ch,CURLOPT_NOBODY,true);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    // Get the aswer
    $response = curl_exec($ch);
    
    // Close cURL
    curl_close($ch);
    return $response ? true : false;
  }
  //Website you need to check
  $website = 'https://faxe.xyz/';
?>
<html>
<section>
    // Its an exemple but the usage still the same, you can show at as how you want
    <div>
  	<h2> website status </h2>
    <h3>
    <?php  if(WebCheck($waebsite)){
    echo 'Website working good 👍';      
  }else{
     echo 'Website still no available 🤏'; 
  }   
     ?>    
    </h3>
  </div>
</html>
