<style>
    textarea{
        font-size: 20;
        width: 30%;
        height: 200px;

    }
</style>

<html>
<head> </head>
<body>
変換後コード <br>
<?php
  include ("../myfunc/commonfunction.php");

  
//  $befCode = htmlspecialchars($_POST["exsrc"], ENT_QUOTES);
  
$aftCode = $_POST["exsrc"];
$aftCode = str_replace("int ","var ",$aftCode);
$aftCode = str_replace("size( ","CreateCanvas( ",$aftCode);
$aftCode = str_replace("void ","function ",$aftCode);
 
echo "<textarea>", $aftCode , "</textarea>" ;

?> 



</body>
</html>