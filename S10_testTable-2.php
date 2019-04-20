<html>
<body>
<style>
	.cal td {border-bottom: 1px solid silver; 
	         border-top:    1px solid blue; 
	         padding: 10px; }    //ぎょうのれいあうと
</style>

<?php

  $datenum = date("Y/m/d");
  echo($datenum);
  echo("<br />");
  echo("<h2> Test PHP Code </h2> ");
 
  echo("<br />");
  echo("<br />");

  echo("<table class='cal'>");
  $retu1 = "<td>  Title  </td>";
  $retu2 = "<td>  Caption  </td>";
  $retu3 = "<td>  Value  </td>";
  echo("Main Title");
  echo("<tr>  $retu1  $retu2  $retu3 </tr>");  
  echo("<tr>  $retu2  $retu3  $retu1 </tr>");

    
  echo("</table>");
  

?>

<form action="S01_main.php" >
<br><br>
  <input type="submit" value="戻る">
</form>


</body>
</html>
