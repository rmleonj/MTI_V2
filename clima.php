<?php

 $url = "http://api.openweathermap.org/data/2.5/weather?id=3995402&lang=en&units=metric&APPID=aefa9e291107ce999aefbd53893e7502"; 
 $contents = file_get_contents($url);
 $clima=json_decode($contents); 
 $temp_max=$clima->main->temp_max; 
 $temp_min=$clima->main->temp_min; 
 $icon=$clima->weather[0]->icon.".png";
 $today = date("F j, Y, g:i a"); 
 $cityname = $clima->name; echo $cityname . " - " .$today . "<br>"; 
 echo "Temp Max: " . $temp_max ."&deg;C<br>"; 
 echo "Temp Min: " . $temp_min ."&deg;C<br>"; 
// echo "<img src='http://openweathermap.org/img/w/" . $icon ."'/ >"; 
 ?>