<?php
$json = file_get_contents("something.json");
//read your json file at something.json
$array = json_decode($json,true);
$objects = "objects";
$file = fopen("decoded.txt","w+");
foreach($array[$objects] as $key => $value){

if(strpos($key,'.ogg')!==false){
  fwrite($file,"$key\n");
  echo $key;
  echo "<br>";
}

}
fclose($file);
 ?>
