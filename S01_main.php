
<?php
  $beginner = "<h2> 初心者のための";
  $webpage =  "ホームページ作り </h2>";
     print($beginner. $webpage);
      
  $datenum = date("Y/m/d");
    echo("Today Is ");
    echo($datenum);
    echo("  Start Is 2018/12/09"); 

	kaigyo(5);	
  
  //--------------
  function kaigyo($num){
    for ($i=0; $i<$num; $i++) {
    	echo("<br />");
    }
  }

?>

<h3>
りんくのさんぷる </h3>

<p>To see the current configuration, please have a look at 
	<a href = "http://127.0.0.1/Study%20PHP/myfunc/untitled.php">phpinfo</a>. 
</p>
	
<h3>
ぼたんのさんぷる	</h3>
<form action="S10_anserForm.php" method="POST">
	ご感想：<br>
	<textarea name="kanso" rows="4" cols="40">ここに感想を記入してください。</textarea><br><br>
  <input type="submit"> <input type="reset">
</form>


<form action="S10_testTable.php" method="POST">
<h3> TABLE Sample </h3>
  <input type="submit" value="TABLE Sample">
</form>

<br>
<h3>
  DB ssample


</h3>




