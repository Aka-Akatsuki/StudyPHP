<html>
<style>

  body{
    mergin-top: 100px;
    padding-top: 10%;
    text-align: center;
  }
  
   table{
     border: solid #333366;
     padding: 10px 40px 20px 40px;
     margin-bottom: 20px;
     width: 300px;
     height: 200px;
     
   }
   td{
     height: 30px;
   }
   
   .clsMsgWornig{
   
		color: red;
}
   
</style>
<!-- FreeIcon -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v0.0.2/css/unicons.css">


<head> </head>

<body>

<form action="Login-select.php" method="POST">
  <table align="center"> 
  <tr> <td> <i class='uil uil-user'></i> </td>  
  		 <td> <?= $_POST["id"] ?> </td>   </tr>
  <tr> <td> <i class='uil uil-keyhole-square'></i> </td> 
       <td> <?= $_POST["pwd"] ?> </td>   </tr>
  </table>

  <!-- <input type="submit" name="logintop" value=" 戻 る "> -->
  
<input type="button" onclick="location.href='./Login.php'" name="logintop" value=" 戻 る ">

<?php
	include "../myfunc-2/commonfunction.php";

	if (existId($_POST["id"]) == 1) {
	   //$upath = "location.href=\"'./userinfo.php'";
  		echo ' <input type="button" onclick="location.href=\'./userinfo.php\'" name="userinfo" value= "NEXT">';
	}
	else {
  		echo "<p class='clsMsgWornig'> ", $_POST["id"] , "is not regist ! </p>" ;
	}
?>


</form>


</body>
</html>