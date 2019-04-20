<?php

  $color = 'green';
  $fruit = 'apple';
  

function testfnc(){ 
  echo "Run testfnc() another php file !!";
  return $rtn;

}


function existID($Userid) {
$isUser = 0;
$rtn = 0;
$row = 1;
if (($handle = fopen("../data/iddata.txt", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        //echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            //echo $data[$c] . "<br />\n";
            //echo $data[$c] ;
            //becho "<br>";
        }
        if ($data[0] == $Userid) {
          //echo "Get ID ", $data[0];
          //$userid = $data[0];
          $rtn = 1;
        }
        else {
          //echo "not exist $data[0] !<br><br>";
        }
    }
    fclose($handle);
}

  return $rtn;
}



?>