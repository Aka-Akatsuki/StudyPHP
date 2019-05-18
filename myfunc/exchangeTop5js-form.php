<style>
    textarea{
        font-size: 20;
        width: 70%;
        height: 70%;

    }
</style>

<html>
<head> </head>
<body>

<?php
  include ("../myfunc/commonfunction.php");

?> 

<form action="exchangeTop5js.php" method="POST">
    ソースコードをここに入力します。 <br>
    <textarea name="exsrc" row="10" col ="5">ここに入力</textarea> <br>
    <input type="submit" value="変換"/>

</form>


</body>
</html>