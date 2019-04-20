<?php
//output_buffering = on
if (isset($_POST["logintop"])) {
//header("location: ./Login.php");
exit;
}elseif (isset($_POST["userinfo"])) {
//header("location: ./userinfo.php");
 $win = windows.open("userinfo.php");
exit;
} else{
echo "not select";
}
?>
