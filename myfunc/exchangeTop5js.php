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

  echo htmlspecialchars($_POST["exsrc"], ENT_QUOTES);


?> 



</body>
</html>